<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::orderby('id', 'desc')->paginate(8);
        $categories = Category::all();
        return view('books.index', compact('books', 'categories'));

        /*return view('books.index', [
            'books' => Book::latest()->filter(
                request(['category'])
            )->paginate(18)->withQueryString()
        ]);*/
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            // Validate the max number of characters to avoid database truncation
            'title' => ['required', 'string', 'max:100'],
            // The user should select at least one category
            'categories_id' => ['required', 'array', 'min:1'],
            'categories_id.*' => ['required', 'integer', 'exists:categories,id'],
        ]);

        $book = new Book();
        $book->title = $request->title;
        $book->categories()->attach($request->categories_id);

        return redirect()->route('books.index');
    }

    public function show(Book $book)
    {
        return view('books.show', [
            'book' => $book
        ]);
    }
}
