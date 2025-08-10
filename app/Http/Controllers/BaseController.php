<?php

namespace App\Http\Controllers;

use App\Models\Article;

class BaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('app.index', [
            'blogs' => Article::orderBy('id', 'desc')->limit(2)->get(),
        ]);
    }
}
