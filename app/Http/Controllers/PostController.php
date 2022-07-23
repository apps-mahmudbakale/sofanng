<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\POP3;
use App\Http\Requests\PostFormRequest;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::paginate(10);
        return view('posts.index', compact('posts'));
    }

    public function blog()
    {
        $posts = Post::paginate(10);

        return view('news', compact('posts'));
    }


    public function ShowNews($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('show-news', compact('post'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('caption')) {
            $fileNameWithExt = $request->file('caption')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            $extension = $request->file('caption')->getClientOriginalExtension();

            $photo = $filename.'_'.time().'.'.$extension;
            $path = $request->file('caption')->storeAs('public/captions', $photo);
        } else {
            $photo = 'caption.png';
        }

        $post = Post::create(array_merge($request->only('title', 'body'), ['caption' => $photo, 'slug' => Str::slug($request->title, '-')]));
        // dd($request->all());
        return redirect()->route('posts.index')->with('status', 'Post Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        if ($request->hasFile('caption')) {
            $fileNameWithExt = $request->file('caption')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            $extension = $request->file('caption')->getClientOriginalExtension();

            $photo = $filename.'_'.time().'.'.$extension;
            $path = $request->file('caption')->storeAs('public/captions', $photo);
        } else {
            $photo = $post->caption;
        }

        $post->update(array_merge($request->only('title', 'body'), ['caption' => $photo, 'slug' => Str::slug($request->title, '-')]));

        return redirect()->route('posts.index')->with('status', 'Post Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return back()->with('status', 'Post Deleted');
    }
}
