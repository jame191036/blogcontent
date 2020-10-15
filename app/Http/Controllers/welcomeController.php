<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;

class welcomeController extends Controller
{
    public function index(){
        $search = Request()->query('search');
        if ($search) {
            // การค้นหา
            $posts = Post::where('title','LIKE',"%{$search}%")->paginate(1);
        }else{
            $posts = Post::paginate(4);
        }
        return view('welcome')
        ->with('categories', Category::all())
        ->with('posts',$posts)
        ->with('tags',Tag::all());
    }
}
