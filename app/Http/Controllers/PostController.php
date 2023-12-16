<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $data = ['categories' => Category::whereHas('posts')
            ->take(10)->get(),];
        // dd($data);
        return view("posts.index", $data);
    }

    public function show(Post $post)
    {
        $data = ['post' => $post];
        return view("posts.show", $data);
    }
}
