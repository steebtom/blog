<?php

namespace blog\Http\Controllers;

// use App\blogs;

// use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class blogs extends Controller
{
    public function index()
    {
        return view('blogs.index');
    }

    public function create()
    {
        return view('blogs.create');
    
    } 

    public function store(Request $request)
    {
        $blog = new Blogs;
        $blog->title = $request->title;
        $blog->content = $request->content;

        $blog   ->save();

        return redirect()->route('blogs_path');
    } 
    public function save()
    {
        return view('welcome');
    }
}
