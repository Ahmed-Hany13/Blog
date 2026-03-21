<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
// use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $posts = Post::with('category')->where('status', 'published')->latest()->paginate(12);
        $categories = Category::withCount('posts')->get();
        return view('home', compact('posts', 'categories'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function about()
    {
        return view('about');
    }

    public function singlePost(Post $post)
    {
        $post->load('category', 'user');
        return view('posts.single', compact('post'));
    }
}
