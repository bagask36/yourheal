<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class PostDetailController extends Controller
{
    public function show($id)
    {
        $post = Article::findOrFail($id);
        return view('front.postdetail.index', compact('post'));
    }
}
