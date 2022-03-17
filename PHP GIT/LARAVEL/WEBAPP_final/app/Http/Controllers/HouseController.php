<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('index', ['house' => $posts]);
    }

    public function create()
    {
        return view('create');
    }

    public function store()
    {
        request()->validate([
            'name'=>'required',
            'lname'=>'required',
        ]);

        Post::create([
            'name' => request('name'),
            'last_name' => request('lname'),
        ]);
        
        return redirect('/posts');
    }

    public function edit(Post $post)
    {
        return view('edit', ['post' => $post]);
    }

    public function update(Post $post)
    {
        request()->validate([
            'name'=>'required',
            'lname'=>'required',
        ]);
        
        $post -> update([
            'name' => request('name'),
            'last_name' => request('lname'),
        ]);
        
        return redirect('/posts');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        
        return redirect('/posts');
    }
}
