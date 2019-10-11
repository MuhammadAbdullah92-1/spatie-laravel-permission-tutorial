<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Postcontroller extends Controller
{
    public function index(){

        $posts=\App\Post::all();
        return view('posts.index',compact('posts'));
    }
    public function show($id){

    $post=\App\Post::find($id);
    return view('posts.show',compact('post'));
    }
}
