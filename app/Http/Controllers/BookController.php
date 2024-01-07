<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('data.index', compact('books'));
    }

    public function create()
    {
        return view('data.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        Book::create($request->all());

        return redirect()->route('data.index')
            ->with('success', 'Book created successfully.');
    }

    public function show(User $data)
    {
        return view('data.show', compact('data'));
    }

    public function edit(User $data)
    {
        return view('data.edit', compact('data'));
    }

    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $book->update($request->all());

        return redirect()->route('data.index')
            ->with('success', 'Book updated successfully');
    }

    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->route('data.index')
            ->with('success', 'Book deleted successfully');
    }
}