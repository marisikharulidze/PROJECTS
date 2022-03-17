<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('index', ['posts' => $posts]);
    }

    public function create()
    {
        return view('create');
    }

    public function store()
    {
        request()->validate([
            'mdebareoba'=>'required',
            'otaxis_raodenoba'=>'required',
            'tarigi'=>'required',
            'fartobi'=>'required',
            'fasi'=>'required',
        ]);

        // $inputArray = [
        //     'თბილისი',
        //     'ბათუმი',
        //     'ქუთაისი',
        //     'რუსთავი',
        //     'გორი',
        // ];
        // $randomItems = InputArray::random($inputArray, 1);

        $n = rand(1,6);
        
        Post::create([
            'mdebareoba' =>  request('mdebareoba'),
            'otaxis_raodenoba' => request('otaxis_raodenoba'),
            'tarigi' => request('tarigi'),
            'fartobi' => request('fartobi'),
            'fasi' => request('fasi'),
        ]);
        
        return redirect('/');
    }

    public function edit(Post $post)
    {
        return view('edit', ['post' => $post]);
    }

    public function update(Post $post)
    {
        request()->validate([
            'mdebareoba'=>'required',
            'otaxis_raodenoba'=>'required',
            'tarigi'=>'required',
            'fartobi'=>'required',
            'fasi'=>'required',
        ]);
        
        $post -> update([
            'mdebareoba' => request('mdebareoba'),
            'otaxis_raodenoba' => request('otaxis_raodenoba'),
            'tarigi' => request('tarigi'),
            'fartobi' => request('fartobi'),
            'fasi' => request('fasi'),
        ]);
        
        return redirect('/');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        
        return redirect('/');
    }

    public function editt()
    {
        $posts = Post::all();
        return view('editt', ['posts' => $posts]);
    }
    public function delette()
    {
        $posts = Post::all();
        return view('delette', ['posts' => $posts]);
    }
    public function search()
    {
        $posts = Post::all();
        return view('search', ['posts' => $posts]);
    }
}