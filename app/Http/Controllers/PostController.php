<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use Illuminate\Support\Facades\Auth;
use Alert;
class PostController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('create');
        }

        Alert::message('Login error, Abeg Check your username or password', 'Oopz!');
        return back();
    }

    public function logout()
    {
        Auth::logout();      
        return view('index');
    }

    public function create()
    {
        return view('blog_partials.create_blog');
    }

    public function store(Request $request)
    {
        $request->validate(([
            'body' => 'required|min:30',
            'title' => 'required|max:200',
            'featured_image' => 'required|max:2048'
        ]));

        $post = new Post;
        $post->body = $request->body;
        $post->title = $request->title;
        $post->user_id = Auth::user()->id;
        $post->category = $request->category;
        
        if ($request->hasFile('featured_image')) {
        $image = $request->file('featured_image');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $name);
        }
        $post->featured_image = $name;//$request->featured_image;
        
        $post->save();
        Alert::message('Post Created Successfully', 'Success');
        return redirect('blog');
    }

    public function blog()
    {
        $posts = Post::orderBy('created_at', 'DESC')->get();
        return view('blog', ['posts'=> $posts]);
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->first();
        return view('blog_partials.show_blog', ['post' => $post]);
    }

    public function edit($slug)
    {
        $post = Post::where('slug', $slug)->first();        
        return view('blog_partials.edit', ['post' => $post]);
    }


    public function update(Request $request, $slug)
    {
        $request->validate(([
            'body' => 'required|min:30',
            'title' => 'required|max:200',
        ]));

        $post = Post::where('slug', $slug)->first();
        $post->body = $request->body;
        $post->title = $request->title;
        if ($request->hasFile('featured_image')) {
        $image = $request->file('featured_image');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $name);
        }
        $post->featured_image = $name;//$request->featured_image;
 
        $post->category = $request->category;
        $post->save();
        Alert::message('Edited successfully', 'Post Edited!');        
        return redirect('blog');
    }

    public function destroy($slug)
    {
        $post = Post::where('slug', $slug)->first();
        $post->delete();
        Alert::error('Deleted successfully', 'Post Deleted!');
        return redirect('blog');       
    }

    public function test()
    {
        $ar = ['hello', 'people', 'how are you'];
        dd($ar);
    }
}
