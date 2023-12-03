<?php

namespace App\Http\Requests\Auth;

use Illuminate\Auth\Events\Lockout;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;


class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required|email',
            'password' => 'required',
        ];
    }

    /**
     * Attempt to authenticate the request.
     *
     * @return void
     */
    public function authenticate()
    {
        $this->ensureIsNotRateLimited();

        if (!Auth::attempt($this->only('email', 'password'), $this->filled('remember'))) {
            $this->incrementLoginAttempts();
            return redirect()->back()->withErrors(['email' => 'Invalid credentials']);
        }

        $this->clearLoginAttempts();
    }

    /**
     * Ensure the login request is not rate limited.
     *
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function ensureIsNotRateLimited()
    {
        if (!method_exists($this, 'hasTooManyLoginAttempts') || !$this->hasTooManyLoginAttempts()) {
            return;
        }

        event(new Lockout($this));

        $this->redirect(
            route('login')
        )->withInput(
            $this->except($this->username(), 'password')
        )->withErrors([
            $this->username() => __('auth.throttle', [
                'seconds' => $this->limiter()->availableIn(
                    $this->throttleKey($this)
                ),
                'minutes' => ceil(
                    $this->limiter()->availableIn(
                        $this->throttleKey($this)
                    ) / 60
                ),
            ]),
        ]);
    }
}
