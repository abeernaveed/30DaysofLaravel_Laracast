<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(100)->create();
        \App\Models\Comment::factory(100)->create();
        \App\Models\Employee::factory(100)->create();
        \App\Models\Job::factory(100)->create();
        \App\Models\Post::factory(100)->create();
        \App\Models\Tag::factory(100)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}