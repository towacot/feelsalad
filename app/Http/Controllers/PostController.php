<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function index(){
        $post=Post::orderBy('created_at','desc')->get();
        return view('posts.index',['posts'=>$post]);
    }

    public function create(){
        return view('posts.create');
    }
    public function show($id){
        $post=Post::findOrFail($id);
        return view('posts.show',compact('post'));
    }
    // ��Ƥ���¸
    public function store(Request $request) {
        // ����
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $post = new Post;

        if ($request->hasFile('image')) {
            $file_name = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('images'), $file_name);
            $post->image = $file_name;
        } else {
            // �������ʤ���硢���Τޤޤˤ��뤫���ǥե�����ͤ�����
            $post->image = null;  // �㤨�Хǥե���Ȥ�null�򥻥å�
        }
        $post->title = $request->title;
        $post->description = $request->description;


        $post->save();
        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }
}

