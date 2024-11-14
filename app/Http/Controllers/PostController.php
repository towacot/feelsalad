<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Str;
class PostController extends Controller
{
    public function index(){
        $posts=Post::orderBy('created_at','desc')->get();
        $pagetitle='Feel Salad';
        $pageinfo='';
        return view('posts.index',compact('posts','pagetitle','pageinfo'));
    }


    public function show($id){
        $post=Post::findOrFail($id);
        $pagetitle=Post::findOrFail($id)->title;

        $pageinfo=Str::limit( strip_tags(Post::findOrFail($id)->description),100,'...') ;

        return view('posts.show',compact('post','pagetitle','pageinfo'));
    }
}

