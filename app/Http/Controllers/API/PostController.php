<?php

namespace App\Http\Controllers\API;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Social;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Sliderinstagram;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::with('user','categories','tags','comments')->latest()->get();
        return response()->json($posts);
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post, $slug)
    {
        $post = Post::with('user','categories','tags','comments')->where('slug',$slug)->first();
        return response()->json($post);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function categories()
    {
        $categories = Category::latest()->get();
        return response()->json($categories);
    }
    public function categorybypost($slug)
    {
        $categorybyposts = Category::with('posts')->where('slug', $slug)->first();
        return response()->json($categorybyposts);
    }
    public function tag()
    {
        $tags = Tag::latest()->get();
        return response()->json($tags);
    }
    public function tagbypost($slug)
    {
        $tagbyposts = Tag::with('posts')->where('slug', $slug)->first();
        return response()->json($tagbyposts);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function popular()
    {
        $populars = Post::latest()->where('popular', true)->paginate(8);
        return response()->json($populars);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function instagramsliders()
    {
        $instagramsliders = Sliderinstagram::latest()->get();
        return response()->json($instagramsliders);
    }
    public function socialslink()
    {
        $socialslink = Social::all();
        return response()->json($socialslink);
    }
}
