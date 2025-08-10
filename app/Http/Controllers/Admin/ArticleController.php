<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('app.admin.articles.index', [
            'articles' => Article::orderBy('id', 'desc')->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = $request->validate([
            'title' => ['required', 'max:255'],
            'content' => ['required'],
            'image' => ['required', 'image', 'max:2048', 'dimensions:width=1920,height=1080'],
        ]);

        $image = $request->file('image');
        $imageName = $image->hashName();

        Article::create([
            'slug' => str($inputs['title'])->slug() . '-' . time(),
            'title' => $inputs['title'],
            'content' => $inputs['content'],
            'image' => $imageName,
        ]);

        Storage::putFileAs('articles', $image, $imageName);

        return redirect()->route('admin.articles.index')->with([
            'success' => 'The article is created.',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('app.admin.articles.show', [
            'article' => $article,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $inputs = $request->validate([
            'title' => ['required', 'max:255'],
            'content' => ['required'],
            'image' => ['nullable', 'image', 'max:2048', 'dimensions:width=1920,height=1080'],
        ]);

        $article->update([
            'slug' => str($inputs['title'])->slug() . '-' . time(),
            'title' => $inputs['title'],
            'content' => $inputs['content'],
        ]);

        $imageExists = $request->hasFile('image');
        if ($imageExists) {
            $image = $request->file('image');
            $imageName = $image->hashName();

            $article->update([
                'image' => $imageName,
            ]);

            Storage::putFileAs('articles', $image, $imageName);
        }

        return redirect()->route('admin.articles.show', $article)->with([
            'success' => 'The article is updated.',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();

        return redirect()->route('admin.articles.index')->with([
            'success' => 'The article is deleted.',
        ]);
    }
}
