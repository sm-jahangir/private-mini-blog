<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function index()
    {
        $newsletter = Newsletter::all();
        return view('backend.newsletter', compact('newsletter'));
    }
    public function store(Request $request)
    {
        $newsletter = new Newsletter();
        $newsletter->email = $request->email;
        $newsletter->save();
        return back();
    }
    public function destroy(Newsletter $newsletter)
    {
        $newsletter->delete();
        return back();
    }
}
