<?php

namespace App\Http\Controllers\Admin;

use App\Models\Logo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class LogoController extends Controller
{
    public function index()
    {
        $logos = DB::table('logos')->where('id', 1)->get();
        return view('backend.appearence.theme-options', compact('logos'));
    }
    public function store(Request $request)
    {
        if($request->has('image')){
            $image       = $request->file('image');
            $ext = $image->extension();
            $filename = time(). '.'.$ext;
            // $filename    = $image->getClientOriginalName();//oporer dui line er poriborte ai line dileo hoy tobe seta image er real name nibe
            $image_resize = Image::make($image->getRealPath());
            // $image_resize->resize(770, 513);
            $image_resize->fit(150, 150);
            $image_resize->save(public_path('images/logo/' .$filename));
            $logo = $filename;
        }
        DB::table('logos')
                ->where('id', 1)
                ->update([
                    'logo' => $logo,
                ]);
        return back();
    }
}
