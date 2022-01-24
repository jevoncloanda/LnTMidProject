<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function getCreateBook()
    {
        return view('create');
    }

    public function createBook(BookRequest $request)
    {
        Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'page' => $request->page,
            'release' => $request->release,
        ]);
        return redirect(route('getBooks'));
    }

    public function getBooks()
    {
        $books = Book::all();
        return view('view', ['bookz' => $books]);
    }

    public function getBookById($id)
    {
        $book = Book::find($id);
        return view('update', ['book' => $book]);
    }

    public function updateBook(BookRequest $request, $id)
    {
        $book = Book::find($id);
        $book->update([
            'title' => $request->title,
            'author' => $request->author,
            'page' => $request->page,
            'release' => $request->release,
        ]);
        return redirect(route('getBooks'));
    }

    public function deleteBook($id)
    {
        Book::destroy($id);
        return redirect(route('getBooks'));
    }

    public function getHomePage()
    {
        return view('welcome2');
    }

    public function searchBooks()
    {
        $search_text = $_GET['query'];
        $books = Book::where('title', 'LIKE', '%' . $search_text . '%')->orWhere('author', 'LIKE', '%' . $search_text . '%')->get();

        return view('search', ['bookz' => $books]);
    }
}
