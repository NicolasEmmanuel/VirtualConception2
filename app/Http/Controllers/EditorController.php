<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class EditorController extends Controller
{
    //
    public function index() {
 
        $posts =  Blog::orderBy("id", "desc")->paginate(5);
 
        return view("posts", compact("posts"));
    }

     // Create Post 
     public function create() {
 
        return view("create");
    }

    public function store(Request $request) {
 
        $post = [  "title"  =>  $request->title,
                    "body" => $request->body
                ];
       
        $post  =  Blog::create($post);
 
        return back()->with("success", "Post has been created");
     
    }
 
}
