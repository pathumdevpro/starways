<?php

namespace App\Http\Controllers;

use App\Models\Article;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('app.blogs.index', [
            'blogs' => Article::orderBy('id', 'desc')->get(),
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $blog)
    {
        return view('app.blogs.show', [
            'blogs' => Article::inRandomOrder()->limit(2)->get(),
            'blog' => $blog,
        ]);
    }
}
