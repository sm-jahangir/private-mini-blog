<?php

namespace App\View\Components\Frontend;

use App\Models\Social;
use Illuminate\View\Component;
use App\Models\Sliderinstagram;

class Footer extends Component
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
        $instagramsliders = Sliderinstagram::latest()->get();
        $socialslink = Social::all();
        return view('components.frontend.footer', compact('instagramsliders', 'socialslink'));
    }
}
