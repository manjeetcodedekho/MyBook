<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Books;
use App\Models\Authors;
use App\Models\Badges;

class BooksController extends Controller
{
    public function BooksView()
    {

        $author = Authors::orderBy('author_name', 'ASC')->get();
        $badge = Badges::orderBy('badge_label', 'ASC')->get();
        $books = Books::latest()->get(); 
        return view('admin.layouts.books', compact('books', 'author', 'badge'));
    }

    public function KeepBook(Request $request)
    {
        $validated = $request->validate([
            'book_name' => 'required',
            'book_price' => 'required',
            'book_isbn' => 'required',
            'book_publish_date' => 'required',
        ]);
        Books::insert([
            'author_id' => $request->author_id,
            'badge_id' => $request->badge_id,
            'book_name' => $request->book_name,
            'book_price' => $request->book_price,
            'book_isbn' => $request->book_isbn,
            'book_publish_date' => $request->book_publish_date,
        ]);
        return redirect()->back()->with('message', 'Badges Add Successfully');;
    }

    public function BookShow()
    {
        $book = Books::latest()->get();
        return view('admin.layouts.show_books', compact('book'));
    }

    public function BookDetails()
    {
        $book = Books::with('author','badge')->latest()->get();
        return view('admin.layouts.content', compact('book'));
    }

    public function BookSearch(Request $request)
    {
        $item = $request->search;
        //echo "$item";

        $searchbook = Books::where('book_name','LIKE', '%$item%')->paginate(2);
        return view('admin.layouts.show_result', compact('searchbook'));
    }

}
