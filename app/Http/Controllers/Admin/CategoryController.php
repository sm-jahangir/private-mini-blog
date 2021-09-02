<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->can('category-view')) {
            $category = Category::all();
            return view('backend.category.index', compact('category'));
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
        if (Auth::user()->can('category-create')) {
            return view('backend.category.create');
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
        if (Auth::user()->can('category-create')) {
            $category = new Category();
            $category->name = $request->name;
            $category->save();
            Toastr::success('Category Added Successfully', 'Success');
            return redirect()->route('admin.category.index');
        } else {
            return redirect()->route('admin.401');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        if (Auth::user()->can('category-edit')) {
            return view('backend.category.create', compact('category'));
        } else {
            return redirect()->route('admin.401');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        if (Auth::user()->can('category-edit')) {
            $category->name = $request->name;
            $category->save();
            Toastr::info('Category Updated Successfully', 'Info');
            return redirect()->route('admin.category.index');
        } else {
            return redirect()->route('admin.401');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        if (Auth::user()->can('category-delete')) {
            $category->delete();
            Toastr::warning('Category Deleted Successfully', 'Warning');
            return back();
        } else {
            return redirect()->route('admin.401');
        }
    }
}
