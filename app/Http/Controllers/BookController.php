<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::orderby('id', 'desc')->paginate(8);
        return view('books.index', compact('books'));

        /*return view('books.index', [
            'books' => Book::latest()->filter(
                request(['category'])
            )->paginate(18)->withQueryString()
        ]);*/
    }

    public function show(Book $book)
    {
        return view('books.show', [
            'book' => $book
        ]);
    }
}
