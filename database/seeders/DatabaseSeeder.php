<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolePermissionsSeeder::class);
        \App\Models\User::factory(500)->create();
        $this->call(SociallinkSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(TagSeeder::class);
        $this->call(PostSeeder::class);
        $this->call(SliderSeeder::class);
        $this->call(SliderinstagramSeeder::class);
        $this->call(LogoSeeder::class);
    }
}
