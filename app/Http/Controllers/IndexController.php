<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()->paginate(8);
        $populars = Post::latest()->where('popular', true)->paginate(8);
        $featureds = Post::latest()->where('featured', true)->paginate(8);
        $trendings = Post::latest()->where('trending', true)->paginate(8);
        $categories = Category::latest()->get();
        $tags = Tag::latest()->get();
        return view('frontend.index', compact('posts', 'categories', 'tags', 'featureds', 'trendings', 'populars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post,$slug)
    {
        $post = Post::where('slug',$slug)->first();
        return view('frontend.details', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
    public function sidebar()
    {
        $posts = Post::latest()->paginate(8);
        $populars = Post::latest()->where('popular', true)->paginate(8);
        $featureds = Post::latest()->where('featured', true)->paginate(8);
        $trendings = Post::latest()->where('trending', true)->paginate(8);
        $categories = Category::latest()->get();
        $tags = Tag::latest()->get();
        return view('frontend.partials.sidebar', compact('posts', 'categories', 'tags', 'featureds', 'trendings', 'populars'));
    }
}
