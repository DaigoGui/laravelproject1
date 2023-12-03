<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

 
    public function login(Request $request)
    {
        // Validate the user's login credentials
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        // Attempt to log in the user
        if (Auth::attempt($credentials)) {
            // Authentication passed, redirect to intended page or home
            return redirect()->intended('welcome');
        }
    
        // Authentication failed, redirect back with errors
        return back()->withErrors(['email' => 'Invalid credentials']);
    }
    

    public function logout(Request $request)
    {
        Auth::logout();

        return redirect('welcome');
    }
}

