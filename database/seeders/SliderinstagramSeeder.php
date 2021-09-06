<?php

namespace Database\Seeders;

use App\Models\Sliderinstagram;
use Illuminate\Database\Seeder;

class SliderinstagramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sliderinstagram::create([
            'image' => '1.jpg',
            'slider_link' => 'https://www.instagram.com/',
        ]);
        Sliderinstagram::create([
            'image' => '2.jpg',
            'slider_link' => 'https://www.instagram.com/',
        ]);
        Sliderinstagram::create([
            'image' => '3.jpg',
            'slider_link' => 'https://www.instagram.com/',
        ]);
        Sliderinstagram::create([
            'image' => '4.jpg',
            'slider_link' => 'https://www.instagram.com/',
        ]);
        Sliderinstagram::create([
            'image' => '5.jpg',
            'slider_link' => 'https://www.instagram.com/',
        ]);
        Sliderinstagram::create([
            'image' => '6.jpg',
            'slider_link' => 'https://www.instagram.com/',
        ]);
        Sliderinstagram::create([
            'image' => '7.jpg',
            'slider_link' => 'https://www.instagram.com/',
        ]);
    }
}
