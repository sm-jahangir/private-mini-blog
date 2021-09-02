<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->can('tag-view')) {
            $tag = Tag::all();
            return view('backend.tag.index', compact('tag'));
        } else {
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
        if (Auth::user()->can('tag-create')) {
            return view('backend.tag.create');
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
        if (Auth::user()->can('tag-create')) {
            $tag = new Tag();
            $tag->name = $request->name;
            $tag->save();
            Toastr::success('Tag Added Successfully', 'Success');
            return redirect()->route('admin.tag.index');
        } else {
            return redirect()->route('admin.401');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        if (Auth::user()->can('tag-edit')) {
            return view('backend.tag.create', compact('tag'));
        } else {
            return redirect()->route('admin.401');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $tag)
    {
        if (Auth::user()->can('tag-edit')) {
            $tag->name = $request->name;
            $tag->save();
            Toastr::info('Tag Updated Successfully', 'Info');
            return redirect()->route('admin.tag.index');
        } else {
            return redirect()->route('admin.401');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        if (Auth::user()->can('tag-delete')) {
            $tag->delete();
            Toastr::warning('Tag Deleted Successfully', 'Warning');
            return back();
        } else {
            return redirect()->route('admin.401');
        }
    }
}
