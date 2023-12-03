<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// QuestionController.php

use App\Models\Question;


class QuestionController extends Controller
{
    public function create()
    {
        return view('questions.create');
    }

    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'username' => 'required|string',
            'favorite_fan_fiction' => 'required|string',
            'favorite_book' => 'required|string',
            'books_read' => 'required|string',
            'books_downloaded' => 'required|string',
            'books_loved' => 'required|string',
            'user_question' => 'required|string',
            'answer' => 'required|string',
        ]);

        // Create a new question in the database
        $question = Question::create($validatedData);

        // Fetch all questions to display on the top of the form
        $allQuestions = Question::all();

        // Return the view with the new question and all questions
        return view('questions.create', compact('question', 'allQuestions'));
    }
}
