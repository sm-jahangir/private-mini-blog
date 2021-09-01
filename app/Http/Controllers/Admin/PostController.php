<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::all();
        return view('backend.post.index', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('backend.post.form',compact('categories','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post();


        if($request->has('image')){
            $image = $request->file('image');
            $ext = $image->extension();
            $file = time(). '.'.$ext;
            $image->storeAs('public/post',$file);//above 4 line process the image code
            $post->image =  $file;//ai code ta image ke insert kore
        }

        $post->user_id = Auth::id();
        $post->title = $request->title;
        $post->excerpt = $request->excerpt;
        $post->body = $request->body;
        $post->status = $request->status;
        $post->featured = filled($request->featured);
        $post->trending = filled($request->trending);
        $post->popular = filled($request->popular);
        $post->format = $request->format;
        
        $post->save();

        $post->categories()->attach($request->categories);
        $post->tags()->attach($request->tags);
        
        Toastr::success('Post Added Successfully', 'Success');
        return redirect()->route('admin.post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('backend.post.form', compact('post','categories','tags'));
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
        if($request->has('image')){
            $image = $request->file('image');
            $ext = $image->extension();
            $file = time(). '.'.$ext;
            $image->storeAs('public/post',$file);//above 4 line process the image code
            $post->image =  $file;//ai code ta image ke insert kore
        }

        $post->user_id = Auth::id();
        $post->title = $request->title;
        $post->excerpt = $request->excerpt;
        $post->body = $request->body;
        $post->status = $request->status;
        $post->featured = filled($request->featured);
        $post->trending = filled($request->trending);
        $post->popular = filled($request->popular);
        $post->format = $request->format;
        
        $post->save();
        $post->categories()->sync($request->categories);
        $post->tags()->sync($request->tags);
        
        Toastr::success('Post Updated Successfully', 'Info');
        return redirect()->route('admin.post.index');
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
        Toastr::warning('Post Deleted Successfully', 'Warning');
        return back();
    }
}
