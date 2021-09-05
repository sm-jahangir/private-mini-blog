<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Slider;
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
        $sliders = Slider::latest()->get();
        return view('frontend.index', compact('posts', 'categories', 'tags', 'featureds', 'trendings', 'populars', 'sliders'));
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
        $populars = Post::latest()->where('popular', true)->paginate(8);
        $trendings = Post::latest()->where('trending', true);
        $categories = Category::latest()->paginate(8);
        $single_post_tags = Tag::latest()->paginate(4);
        $tags = Tag::latest()->get();

        $post = Post::where('slug',$slug)->first();

        $related = Post::whereHas('tags', function ($q) use ($post) {
            return $q->whereIn('name', $post->tags->pluck('name')); 
        })
        ->where('id', '!=', $post->id) // So you won't fetch same post
        ->paginate(4);

        return view('frontend.details', compact('post', 'categories', 'tags', 'trendings', 'populars', 'single_post_tags', 'related'));
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
    public function categorybypost($slug)
    {
        $categories = Category::latest()->paginate(8);
        $populars = Post::latest()->where('popular', true)->paginate(8);
        $single_post_tags = Tag::latest()->paginate(4);
        $tags = Tag::latest()->get();
        $categorybyposts = Category::where('slug', $slug)->first();
        return view('frontend.categorybypost', compact('categorybyposts', 'categories', 'tags','populars'));
    }
    public function tagbypost($slug)
    {
        $categories = Category::latest()->paginate(8);
        $populars = Post::latest()->where('popular', true)->paginate(8);
        $single_post_tags = Tag::latest()->paginate(4);
        $tags = Tag::latest()->get();
        $tagbyposts = Tag::where('slug', $slug)->first();
        return view('frontend.tagbypost', compact('tagbyposts', 'categories', 'tags','populars'));
    }
}
