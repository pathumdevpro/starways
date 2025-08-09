<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('app.blogs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('app.blogs.show');
    }
}
