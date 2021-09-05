<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Intervention\Image\Facades\Image;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::latest()->get();
        return view('backend.sliders.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        return view('backend.sliders.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slider = new Slider();
        $slider->title1 = $request->title1;
        $slider->title2 = $request->title2;
        $slider->title3 = $request->title3;

        $slider->category_name1 = $request->slider_category1;
        $slider->category_name2 = $request->slider_category2;
        $slider->category_name3 = $request->slider_category3;

        $slider->post_link1 = $request->slider_link1;
        $slider->post_link2 = $request->slider_link2;
        $slider->post_link3 = $request->slider_link3;

        
        if($request->has('image1')){
            $image       = $request->file('image1');
            $ext = $image->extension();
            $filename = time().'--1'.  '.'.$ext;
            // $filename    = $image->getClientOriginalName();//oporer dui line er poriborte ai line dileo hoy tobe seta image er real name nibe
            $image_resize = Image::make($image->getRealPath());
            // $image_resize->resize(770, 513);
            $image_resize->fit(770, 500);
            $image_resize->save(public_path('images/slider/' .$filename));
            $slider->image1 = $filename;
        }
        if($request->has('image2')){
            $image       = $request->file('image2');
            $ext = $image->extension();
            $filename = time().'--2'.  '.'.$ext;
            // $filename    = $image->getClientOriginalName();//oporer dui line er poriborte ai line dileo hoy tobe seta image er real name nibe
            $image_resize = Image::make($image->getRealPath());
            // $image_resize->resize(770, 513);
            $image_resize->fit(770, 500);
            $image_resize->save(public_path('images/slider/' .$filename));
            $slider->image2 = $filename;
        }
        if($request->has('image3')){
            $image       = $request->file('image3');
            $ext = $image->extension();
            $filename = time().'--3'. '.'.$ext;
            // $filename    = $image->getClientOriginalName();//oporer dui line er poriborte ai line dileo hoy tobe seta image er real name nibe
            $image_resize = Image::make($image->getRealPath());
            // $image_resize->resize(770, 513);
            $image_resize->fit(770, 500);
            $image_resize->save(public_path('images/slider/' .$filename));
            $slider->image3 = $filename;
        }
        $slider->save();
        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        return view('backend.sliders.form', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        $slider->title1 = $request->title1;
        $slider->title2 = $request->title2;
        $slider->title3 = $request->title3;

        $slider->category_name1 = $request->slider_category1;
        $slider->category_name2 = $request->slider_category2;
        $slider->category_name3 = $request->slider_category3;

        $slider->post_link1 = $request->slider_link1;
        $slider->post_link2 = $request->slider_link2;
        $slider->post_link3 = $request->slider_link3;

        
        if($request->has('image1')){
            $image       = $request->file('image1');
            $ext = $image->extension();
            $filename = time().'--1'.  '.'.$ext;
            // $filename    = $image->getClientOriginalName();//oporer dui line er poriborte ai line dileo hoy tobe seta image er real name nibe
            $image_resize = Image::make($image->getRealPath());
            // $image_resize->resize(770, 513);
            $image_resize->fit(770, 500);
            $image_resize->save(public_path('images/slider/' .$filename));
            $slider->image1 = $filename;
        }
        if($request->has('image2')){
            $image       = $request->file('image2');
            $ext = $image->extension();
            $filename = time().'--2'.  '.'.$ext;
            // $filename    = $image->getClientOriginalName();//oporer dui line er poriborte ai line dileo hoy tobe seta image er real name nibe
            $image_resize = Image::make($image->getRealPath());
            // $image_resize->resize(770, 513);
            $image_resize->fit(770, 500);
            $image_resize->save(public_path('images/slider/' .$filename));
            $slider->image2 = $filename;
        }
        if($request->has('image3')){
            $image       = $request->file('image3');
            $ext = $image->extension();
            $filename = time().'--3'. '.'.$ext;
            // $filename    = $image->getClientOriginalName();//oporer dui line er poriborte ai line dileo hoy tobe seta image er real name nibe
            $image_resize = Image::make($image->getRealPath());
            // $image_resize->resize(770, 513);
            $image_resize->fit(770, 500);
            $image_resize->save(public_path('images/slider/' .$filename));
            $slider->image3 = $filename;
        }
        $slider->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        $slider->delete();
        Toastr::warning('Slider Deleted Successfully', 'Warning');
        return back();
    }
}
