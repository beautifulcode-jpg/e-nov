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
        \App\Models\User::factory(1)->create();
        \App\Models\Admin::factory(10)->create();
        \App\Models\Writer::factory(10)->create();
        \App\Models\Article::factory(20)->create();
        \App\Models\Comment::factory(50)->create();

    }
}
