<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use App\Models\Page;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page = Page::all();
        return view('backend.page.index', compact('page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.page.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $page = new Page();


        if($request->has('image')){
            $image = $request->file('image');
            $ext = $image->extension();
            $file = time(). '.'.$ext;
            $image->storeAs('public/page',$file);//above 4 line process the image code
            $page->image =  $file;//ai code ta image ke insert kore
        }

        $page->title = $request->title;
        $page->excerpt = $request->excerpt;
        $page->body = $request->body;
        $page->meta_description = $request->meta_description;
        $page->meta_keywords = $request->meta_keywords;
        $page->status = $request->status;
        
        $page->save();
        
        Toastr::success('Page Added Successfully', 'Success');
        return redirect()->route('admin.page.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        return view('backend.page.form', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {

        if($request->has('image')){
            $image = $request->file('image');
            $ext = $image->extension();
            $file = time(). '.'.$ext;
            $image->storeAs('public/page',$file);//above 4 line process the image code
            $page->image =  $file;//ai code ta image ke insert kore
        }

        $page->title = $request->title;
        $page->excerpt = $request->excerpt;
        $page->body = $request->body;
        $page->meta_description = $request->meta_description;
        $page->meta_keywords = $request->meta_keywords;
        $page->status = $request->status;
        
        $page->save();
        
        Toastr::info('Page Updated Successfully', 'Info');
        return redirect()->route('admin.page.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        $page->delete();
        Toastr::warning('Page Deleted Successfully', 'Warning');
        return back();
    }
}
