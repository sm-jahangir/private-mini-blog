<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Sliderinstagram;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Intervention\Image\Facades\Image;

class SliderinstagramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Sliderinstagram::latest()->get();
        return view('backend.sliderinstagram.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.sliderinstagram.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slider = new Sliderinstagram();
        $slider->slider_link = $request->slider_link;
        $slider->status = filled($request->status);

        
        if($request->has('image')){
            $image       = $request->file('image');
            $ext = $image->extension();
            $filename = time().  '.'.$ext;
            // $filename    = $image->getClientOriginalName();//oporer dui line er poriborte ai line dileo hoy tobe seta image er real name nibe
            $image_resize = Image::make($image->getRealPath());
            // $image_resize->resize(770, 513);
            $image_resize->fit(770, 500);
            $image_resize->save(public_path('images/instagram/' .$filename));
            $slider->image = $filename;
        }
        $slider->save();
        Toastr::success('Slider Added Successfully', 'Success');
        return redirect()->route('admin.sliderinstagram.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sliderinstagram  $sliderinstagram
     * @return \Illuminate\Http\Response
     */
    public function show(Sliderinstagram $sliderinstagram)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sliderinstagram  $sliderinstagram
     * @return \Illuminate\Http\Response
     */
    public function edit(Sliderinstagram $sliderinstagram)
    {
        return view('backend.sliderinstagram.form', compact('sliderinstagram'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sliderinstagram  $sliderinstagram
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sliderinstagram $sliderinstagram)
    {
        $sliderinstagram->slider_link = $request->slider_link;
        $sliderinstagram->status = filled($request->status);

        
        if($request->has('image')){
            $image       = $request->file('image');
            $ext = $image->extension();
            $filename = time().  '.'.$ext;
            // $filename    = $image->getClientOriginalName();//oporer dui line er poriborte ai line dileo hoy tobe seta image er real name nibe
            $image_resize = Image::make($image->getRealPath());
            // $image_resize->resize(770, 513);
            $image_resize->fit(770, 500);
            $image_resize->save(public_path('images/instagram/' .$filename));
            $sliderinstagram->image = $filename;
        }
        $sliderinstagram->save();
        Toastr::info('Slider Updated Successfully', 'Info');
        return redirect()->route('admin.sliderinstagram.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sliderinstagram  $sliderinstagram
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sliderinstagram $sliderinstagram)
    {
        $sliderinstagram->delete();
        Toastr::warning('Slider Deleted Successfully', 'Warning');
        return back();
    }
}
