<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SociallinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('socials')->insert([
            'fb_link' => 'https://www.facebook.com/',
            'fb_link_icon' => '<i class="fa fa-facebook"></i>',

            'twtter_link' => 'https://www.twitter.com/',
            'twtter_link_icon' => '<i class="fa fa-twitter"></i>',

            'linkedin_link' => 'https://www.linkedin.com/',
            'linkedin_link_icon' => '<i class="fa fa-linkedin"></i>',

            'youtube_link' => 'https://www.youtube.com/',
            'youtube_link_icon' => '<i class="fa fa-youtube"></i>',

            'instagram_link' => 'https://www.instagram.com/',
            'instagram_link_icon' => '<i class="fa fa-instagram"></i>',

            'googleplus_link' => 'https://www.google-plus.com/',
            'googleplus_link_icon' => '<i class="fa fa-google-plus"></i>',

            'pinterest_link' => 'https://www.pinterest.com/',
            'pinterest_link_icon' => '<i class="fa fa-pinterest"></i>',

            'vimeo_link' => 'https://www.vimeo.com/',
            'vimeo_link_icon' => '<i class="fa fa-vimeo"></i>',
        ]);
        
    }
}
