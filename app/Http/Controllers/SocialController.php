<?php

namespace App\Http\Controllers;

use App\Models\Social;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.appearence.social');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $social = new Social();
        $social->fb_link = $request->fb_link;
        $social->twtter_link = $request->twtter_link;
        $social->linkedin_link = $request->linkedin_link;
        $social->youtube_link = $request->youtube_link;
        $social->instagram_link = $request->instagram_link;
        $social->googleplus_link = $request->googleplus_link;
        $social->pinterest_link = $request->pinterest_link;
        $social->vimeo_link = $request->vimeo_link;
        $social->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Social  $social
     * @return \Illuminate\Http\Response
     */
    public function show(Social $social)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Social  $social
     * @return \Illuminate\Http\Response
     */
    public function edit(Social $social)
    {
        return view('backend.appearence.social', compact('social'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Social  $social
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Social $social)
    {
        $social->fb_link = $request->fb_link;
        $social->twtter_link = $request->twtter_link;
        $social->linkedin_link = $request->linkedin_link;
        $social->youtube_link = $request->youtube_link;
        $social->instagram_link = $request->instagram_link;
        $social->googleplus_link = $request->googleplus_link;
        $social->pinterest_link = $request->pinterest_link;
        $social->vimeo_link = $request->vimeo_link;
        $social->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Social  $social
     * @return \Illuminate\Http\Response
     */
    public function destroy(Social $social)
    {
        //
    }
}
