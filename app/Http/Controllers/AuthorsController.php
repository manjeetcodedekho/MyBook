<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Authors;

class AuthorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function AuthorsView()
    {
        return view('admin.layouts.authors');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function AuthorsStore(Request $request)
    {
        $validated = $request->validate([
            'author_name' => 'required',
            'author_email' => 'required',
            'author_bio' => 'required',
        ]);


        Authors::insert([
            'author_name' => $request->author_name,
            'author_email' => $request->author_email,
            'author_bio' => $request->author_bio,
        ]);
        return redirect()->back()->with('message','Author Added Successfully');
    }

    public function AuthorShow()
    {
        $author = Authors::latest()->orderBy('id','desc')->get();
        return view('admin.layouts.show_authors', compact('author'));
    }

    
   
}
