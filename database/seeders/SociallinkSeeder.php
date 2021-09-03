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
            'twtter_link' => 'https://www.twitter.com/',
            'linkedin_link' => 'https://www.linkedin.com/',
            'youtube_link' => 'https://www.youtube.com/',
            'instagram_link' => 'https://www.instagram.com/',
            'googleplus_link' => 'https://www.google-plus.com/',
            'pinterest_link' => 'https://www.pinterest.com/',
            'vimeo_link' => 'https://www.vimeo.com/',
        ]);
        
    }
}
