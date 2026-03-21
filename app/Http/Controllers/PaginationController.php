<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PaginationController extends Controller
{

    public function index()
    {

        $posts = Post::with(['category', 'user'])->paginate(10);
        return view('posts.paginated', compact('posts'));
    }



}

