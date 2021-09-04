<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->can('blog-view')) {
            $post = Post::all();
            return view('backend.post.index', compact('post'));
        }else {
            return redirect()->route('admin.401');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::user()->can('blog-create')) {
            $categories = Category::all();
            $tags = Tag::all();
            return view('backend.post.form',compact('categories','tags'));
        } else {
            return redirect()->route('admin.401');
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::user()->can('blog-create')) {
            
            $post = new Post();

            if($request->has('image')){
                $image       = $request->file('image');
                $ext = $image->extension();
                $filename = time(). '.'.$ext;
                // $filename    = $image->getClientOriginalName();//oporer dui line er poriborte ai line dileo hoy tobe seta image er real name nibe
                $image_resize = Image::make($image->getRealPath());
                // $image_resize->resize(770, 513);
                $image_resize->fit(770, 513);
                $image_resize->save(public_path('images/thumbnail/' .$filename));
                $post->image = $filename;
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
        } else {
            return redirect()->route('admin.401');
        }
    
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
        if (Auth::user()->can('blog-edit')) {
            $categories = Category::all();
            $tags = Tag::all();
            return view('backend.post.form', compact('post','categories','tags'));
        } else {
            return redirect()->route('admin.401');
        }
        
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
        if (Auth::user()->can('blog-edit')) {
            if($request->has('image')){
                $image       = $request->file('image');
                $ext = $image->extension();
                $filename = time(). '.'.$ext;
                // $filename    = $image->getClientOriginalName();//oporer dui line er poriborte ai line dileo hoy tobe seta image er real name nibe
                $image_resize = Image::make($image->getRealPath());
                // $image_resize->resize(770, 513);
                $image_resize->fit(770, 513);
                $image_resize->save(public_path('images/thumbnail/' .$filename));
                $post->image = $filename;
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
        } else {
            return redirect()->route('admin.401');
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if (Auth::user()->can('blog-delete')) {
            $post->delete();
            Toastr::warning('Post Deleted Successfully', 'Warning');
            return back();
        } else {
            return redirect()->route('admin.401');
        }
        
    }
}
