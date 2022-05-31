<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\User;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){

        $articles = Blog::paginate(9);

        return view('blog',compact('articles'));

    }

    public function category($id){

        $articles = Blog::all()->where('category_id',$id)->latest()->paginate(3);
 
         
 
         return view('post.index', compact('articles'));
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
