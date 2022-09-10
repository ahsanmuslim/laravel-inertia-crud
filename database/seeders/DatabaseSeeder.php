<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
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

        Post::create([
            'title' => 'Tutorial Laravel 9',
            'content' => 'Cara membuat aplikasi Blog dengan Laravel 9'
        ]);
        Post::create([
            'title' => 'Tutorial Vue JS',
            'content' => 'Cara membuat aplikasi SPA dengan Vue JS'
        ]);
        Post::create([
            'title' => 'Tutorial Kotlin',
            'content' => 'Cara membuat aplikasi Android dengan Kotlin'
        ]);
    }
}
