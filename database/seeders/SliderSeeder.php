<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Slider::create([
            'title1' => 'Best Surfing Spots for Beginners and Advanced',
            'title2' => 'High-Tech Prototype Bike Announced',
            'title3' => 'White Sand of The Desert Discovery',

            'category_name1' => 'Travel',
            'category_name2' => 'Sport',
            'category_name3' => 'Nature',

            'post_link1' => 'http://localhost/laravel/mini-blog/public/blog/cliff-sunset-sea-view',
            'post_link2' => 'http://localhost/laravel/mini-blog/public/blog/altec-lansing-true-evo-truly-wireless-earphones',
            'post_link3' => 'http://localhost/laravel/mini-blog/public/blog/charming-evening-field',

            'image1' => '1.jpg',
            'image2' => '2.jpg',
            'image3' => '3.jpg',
        ]);
        Slider::create([
            'title1' => 'No one rejects, dislikes',
            'title2' => 'Charming Evening Field',
            'title3' => 'Avoids pleasure itself',

            'category_name1' => 'Green',
            'category_name2' => 'Sport',
            'category_name3' => 'Nature',

            'post_link1' => 'http://localhost/laravel/mini-blog/public/blog/to-take-a-trivial-example-which-of-us-ever-undertakes',
            'post_link2' => 'http://localhost/laravel/mini-blog/public/blog/new-fashion-outfits',
            'post_link3' => 'http://localhost/laravel/mini-blog/public/blog/charming-evening-field',

            'image1' => '4.jpg',
            'image2' => '5.jpg',
            'image3' => '6.jpg',
        ]);
        Slider::create([
            'title1' => 'NTruly Wireless Earphones',
            'title2' => 'Lorem ipsum dolor sit amet',
            'title3' => 'Nihil opus est exemplis hoc facere longius',

            'category_name1' => 'Green',
            'category_name2' => 'Sport',
            'category_name3' => 'Nature',

            'post_link1' => 'http://localhost/laravel/mini-blog/public/blog/to-take-a-trivial-example-which-of-us-ever-undertakes',
            'post_link2' => 'http://localhost/laravel/mini-blog/public/blog/new-fashion-outfits',
            'post_link3' => 'http://localhost/laravel/mini-blog/public/blog/charming-evening-field',

            'image1' => '7.jpg',
            'image2' => '8.jpg',
            'image3' => '9.jpg',
        ]);
    }
}
