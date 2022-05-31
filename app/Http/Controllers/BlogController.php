<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){

        $articles = Blog::all();

        return view('blog',compact('articles'));

    }

    public function detail($id){


        $detail = Blog::find($id);

        return view('detail',compact('detail'));

    }

    public function create() {
 
        return view("create");
    }

    public function store(Request $request) {
 
        $post = [  "titre"  =>  $request->titre,
                    "description" => $request->description
                ];
       
        $post  =  Blog::create($post);
 
        return back()->with("success", "Post has been created");
     
    }
  

}
