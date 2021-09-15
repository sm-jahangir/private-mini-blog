<?php

namespace App\View\Components\Frontend;

use App\Models\Page;
use App\Models\Social;
use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;

class Header extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $logos = DB::table('logos')->where('id', 1)->get();
        $socialslink = Social::all();
        $pages = Page::all();
        return view('components.frontend.header', compact('socialslink', 'logos', 'pages'));
    }
}
