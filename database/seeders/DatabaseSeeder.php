<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Blog;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Blog::create([
            'title' => 'Tutorial Laravel 9',
            'slug' => 'tutorial-laravel',
            'content' => 'Cara membuat aplikasi Blog dengan Laravel 9'
        ]);
        Blog::create([
            'title' => 'Tutorial Kotlin',
            'slug' => 'tutorial-kotlin',
            'content' => 'Cara membuat aplikasi Android dengan Kotlin'
        ]);
        Blog::create([
            'title' => 'Tutorial Bootstrap',
            'slug' => 'tutorial-bootstrap',
            'content' => 'Cara membuat aplikasi Blog dengan Bootstrap'
        ]);
    }
}
