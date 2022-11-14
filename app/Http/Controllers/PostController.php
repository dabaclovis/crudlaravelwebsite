<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostController extends Controller
{
    // index page of post
    public function index()
    {
        return view('posts.index',[
            'posts' => DB::table('posts')
            ->orderBy('created_at','desc')
            ->paginate(6),
        ]);
    }
    // creating the post
    public function create()
    {
        return view('posts.create');
    }

    // storing the post
    public function store(Request $request)
    {


        $this->validate($request,[
            'title' => ['required','string','max:65'],
            'body' => [ 'required','string','max:1500'],
        ],[
            'title.required' => 'Enter a good heading for your post',
            'body.required' => 'Enter a descriptive content',
        ]);

        $posts = DB::table('posts')
        ->insert([
            'heading' => $request->input('title'),
            'body' => $request->input('body'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        return redirect()->route('posts.index');
    }

    public function show(Post $post)
    {
        // return view('posts.show',[
        //     'post'=> $post,
        // ]);

       return view('posts.show',[
        'post' => DB::table('posts')
        ->where('id',$post->id)->first(),
       ]);
    }

    public function edit(Post $post)
    {
        return view('posts.edit',[
            'post' => DB::table('posts')->where('id',$post->id)->first(),
        ]);
    }

    public function update(Request $request, Post $post)
    {

        $this->validate($request,[
            'title' => ['required','string','max:65'],
            'body' => [ 'required','string','max:1500'],
        ],[
            'title.required' => 'Enter a good heading for your post',
            'body.required' => 'Enter a descriptive content',
        ]);

        $post = DB::table('posts')->where('id',$post->id)
        ->update([
            'heading' => $request->input('title'),
            'body' => $request->input('body'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        return redirect()->route('posts.index');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return back();
    }
}
