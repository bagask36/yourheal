<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('front.post.index', [
            'latest_post' => Article::latest()->first(),
            'article' => Article::latest()->paginate(5),
        ]);
        
    }
}
