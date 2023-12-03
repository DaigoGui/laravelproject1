<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;



class BooksController extends Controller
{
    public function index()
    {
        $books = \App\Models\Books::all();
        dd($books); // Add this line to debug
        return view('welcome', compact('books'));
    }   

    public function show($id)
    {
        $book = \App\Models\Books::findOrFail($id);
        return view('books.show', compact('book'));
    }
}