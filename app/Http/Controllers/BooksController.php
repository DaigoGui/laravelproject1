<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;



class BooksController extends Controller
{


    public function index()
    {
          //way 1
          $books = Books::latest()->paginate(5);
        return view('books.index', compact('books'))->with(request()->input('page'));


        // Retrieve the authenticated user
        // $user = auth()->user();

        // // Retrieve the user's books
        // $books = $user->books()->latest()->paginate(5);

        // return view('books.index', compact('books'))->with(request()->input('page'));
    }
    
    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
         $request->validate([
          'Title' => 'required',
          'Author' => 'required',
          'Genre' => 'required',
          'published_year' => 'nullable|integer',
          'user_id' => 'nullable|exists:users,id',
          'Book_Covers' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
          'slug' => 'nullable|unique:books,slug',
          'Description' => 'required',
         ]);

       Books::create($request->all());

        return redirect()->route('books.index')
        ->with('success', 'Book created successfully.');
    }

    public function show(Books $book)
    {
        // $book = \App\Models\Books::findOrFail($id);
        return view('books.show', compact('book'));
      
    }
    public function edit(Books $book)
    {
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, Books $book)
    {
        $request->validate([
            'Title' => 'required',
            'Author' => 'required',
            'Genre' => 'required',
            'published_year' => 'nullable|integer',
            'user_id' => 'nullable|exists:users,id',
            'Book_Covers' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
            'slug' => 'nullable|unique:books,slug',
            'Description' => 'required',
           ]);

       // Handle the file separately if provided
    if ($request->hasFile('Book_Covers')) {
        // Store the new file and update the path in the database
        $book->Book_Covers = $request->file('Book_Covers')->store('book_covers', 'public');
    }

    // Update the other fields
    $book->update($request->except('Book_Covers'));

        return redirect()->route('books.index')
        ->with('success', 'Book updated successfully.');
    }

    public function destroy(Books $book)
    {
        $book->delete();

        return redirect()->route('books.index')
        ->with('success', 'Book deleted successfully.');
    }
}