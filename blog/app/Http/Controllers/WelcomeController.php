<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\File;
use Illuminate\Support\Str;

class WelcomeController extends Controller
{
    //welcome method
    public function index(){
        $posts = Post::all();
        return view('welcome', compact('posts'));
    }
}
