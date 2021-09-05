<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create([
            'name' => 'Apple',
        ]);
        Tag::create([
            'name' => 'Asus',
        ]);
        Tag::create([
            'name' => 'Black Shark',
        ]);
        Tag::create([
            'name' => 'Coolpad',
        ]);
        Tag::create([
            'name' => 'Gionee',
        ]);
        Tag::create([
            'name' => 'Google',
        ]);
        Tag::create([
            'name' => 'Honor',
        ]);
        Tag::create([
            'name' => 'Huawei',
        ]);
        Tag::create([
            'name' => 'Infinix',
        ]);
    }
}
