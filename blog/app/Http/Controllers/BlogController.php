<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    //index function
    public function index(){
        return view('BlogPosts.blog');
    }

    //show single post
    public function show(){
        return view('BlogPosts.single-blog-post');
    }

    //show your post
    public function posts(){
        return view('BlogPosts.blog-posts');
    }

    
    //ceate your post
    public function create(){
        return view('BlogPosts.create-blog');
    }

    //ceate your post
    public function store(Request $request){
        $allInputs = $request->all();

        dd($allInputs);


    }
}
