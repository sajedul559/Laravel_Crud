<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Post;

class pageController extends Controller
{
    //
    public function index()
    {
    	$posts = Post::orderBY('id','desc')->get();
    	return view('index')->withPosts($posts);
    }
}
