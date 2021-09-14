<?php

namespace App\View\Components\Frontend;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Social;
use App\Models\Category;
use Illuminate\View\Component;
use App\Models\Sliderinstagram;

class Sidebar extends Component
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
        $socialslink = Social::all();
        $populars = Post::latest()->where('popular', true)->paginate(8);
        $categories = Category::latest()->get();
        $instagramimage = Sliderinstagram::latest()->paginate(6);
        $tags = Tag::latest()->get();
        return view('components.frontend.sidebar', compact('socialslink', 'populars', 'categories', 'instagramimage', 'tags'));
    }
}
