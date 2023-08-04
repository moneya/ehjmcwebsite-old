<?php

namespace App\Http\Controllers;

use App\Post;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        $posts = Post::paginate(12);
        return view('news',['posts' => $posts]);
    }
}
