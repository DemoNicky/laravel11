<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'ucok',
        //     'username' => 'broo',
        //     'email' => 'ucok@localhost',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('password'),
        //     'remember_token' => Str::random(10)
        // ]);

        // Category::create([
        //     'name' => 'web',
        //     'slug' => 'test'
        // ]);

        // Post::create([
        //     'title' => 'article1',
        //     'author_id' => 1,
        //     'category_id' => 1,
        //     'slug' => 'article1',
        //     'body' => 'article1'
        // ]);

        Post::factory(100)->recycle([
            Category::factory(3)->create(),
            User::factory(5)->create()
        ])->create();
    }
}
