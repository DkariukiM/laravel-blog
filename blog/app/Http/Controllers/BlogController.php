<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\File;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    //index function
    public function index(){
        $posts = Post::all();
        return view('BlogPosts.blog', compact('posts'));
    }

    //show single post
    public function show($slug){
        $post = Post::where('slug', $slug)->first();
        return view('BlogPosts.single-blog-post', compact('post'));
    }

    //show your post
    public function posts(){
        $posts = Post::all();
        return view('BlogPosts.blog-posts', compact('posts'));
    }

    
    //ceate your post
    public function create(){
        return view('BlogPosts.create-blog');
    }

    //ceate your post
    public function store(Request $request){
        // $allInputs = $request->all();
        // dd($allInputs);
        //validation
        $request->validate([
        'title' => 'required',
        'image' => 'required|image',
        'body' => 'required'
        ],
        
        [
            'image.image' => 'The file provided must be an image'
        ]
        );

        
        $title = $request->input('title');
        $slug = Str::slug($title, '-');
        $user_id = Auth::user()->id;
        $body = $request->input('body'); 

        //file upload
        $imagePath = 'storage/' . $request ->file('image')->store('postImages' , 'public');

        //interact with model
        $post = new Post();
        $post -> title = $title;
        $post -> slug = $slug;
        $post -> user_id = $user_id;
        $post -> image = $imagePath;
        $post -> body = $body;

        $post->save();

        return redirect()->back()->with('status', 'Post created successfully');








        dd('validation passed, you can now request the input');


    }


    //ceate your comment for a post
    public function comment(Request $request){
        // $allInputs = $request->all();
        // dd($allInputs);
        //validation
        $request->validate([
        'name' => 'required',
        'image' => 'required|image',
        'email' => 'required'
        ],
        
        [
            'image.image' => 'The file provided must be an image'
        ]
        );

        
        $title = $request->input('title');
        $slug = Str::slug($title, '-');
        $user_id = Auth::user()->id;
        $body = $request->input('body'); 

        //file upload
        $imagePath = 'storage/' . $request ->file('image')->store('postImages' , 'public');

        //interact with model
        $post = new Post();
        $post -> title = $title;
        $post -> slug = $slug;
        $post -> user_id = $user_id;
        $post -> image = $imagePath;
        $post -> body = $body;

        $post->save();

        return redirect()->back()->with('status', 'Post created successfully');








        dd('validation passed, you can now request the input');


    }
}
