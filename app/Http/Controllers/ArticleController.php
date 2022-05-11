<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function showAll(Request $request)
    {
        $articles = Article::query();
        if ($request->has('character_code') && !empty($request->get('character_code'))) 
        {
            $articles = $articles->where('character_code', 'like', '%' . $request->get('character_code') . '%');
        }
        if ($request->has('name') && !empty($request->get('name'))) 
        {
            $articles = $articles->where('name', 'like', '%' . $request->get('name') . '%');
        }
        if ($request->has('tag_name') && !empty($request->get('tag_name'))) 
        {
            $articles = $articles->wherePivot($request->has('tag_name'), 1);
        }

        return view('posts', [
            'articles' => $articles->simplePaginate(20)
        ]);
    }

    public function showOne(int $code)
    {
        $article = Article::query()->find($code);
        $tags = $article->tags->sortBy('name');
        return view('posts_code', [
            'article' => $article,
            'tags' => $tags
        ]);
    }
}

