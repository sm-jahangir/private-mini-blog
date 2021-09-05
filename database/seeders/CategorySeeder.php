<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Electronics',
        ]);
        Category::create([
            'name' => 'Accessories & Supplies',
        ]);
        Category::create([
            'name' => 'Camera & Photo',
        ]);
        Category::create([
            'name' => 'Car & vehicle Electronics',
        ]);
        Category::create([
            'name' => 'Computer & Accessories',
        ]);
        Category::create([
            'name' => 'GPS & Navigation',
        ]);
        Category::create([
            'name' => 'HeadPhones',
        ]);
        Category::create([
            'name' => 'Home Audio',
        ]);
        Category::create([
            'name' => 'Office Electronics',
        ]);
    }
}
