<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Article;
use App\Models\Tag;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\CategoryFactory;
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

        /*User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/

        $user = User::create([
            'name' => 'Maksim',
            'email' => 'marchenkovby@gmail.com',
            'password' => Hash::make('v32skpert'),
            'email_verified_at' => now(),
        ]);

        $categories = Category::factory()
            ->count(10)
            ->create();

        $tags = Tag::factory()
            ->count(20)
            ->create();

        Article::factory()
            ->count(20)
            ->for($user)
            ->create();

        Article::factory()
            ->published()
            ->count(30)
            ->for($user)
            ->create();

        Article::all()
            ->each(function ($post) use ($categories, $tags) {
                $post
                    ->categories()
                    ->attach
                    (
                        $categories
                            ->random(rand(1, 2))
                            ->pluck('id')
                            ->toArray()
                    );
                $post
                    ->tags()
                    ->attach
                    (
                        $tags
                            ->random(rand(1, 10))
                            ->pluck('id')
                            ->toArray()
                    );
            });
    }
}
