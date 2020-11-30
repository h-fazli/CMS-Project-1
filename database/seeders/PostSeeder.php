<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Image;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run()
    {
        Post::factory()->count(100)
            ->has(Tag::random(rand(3,10)))
            ->has(Category::random(rand(1,5)))
//            ->has(Image::factory()->count(1))
            ->has(User::rand(1,20))
            ->create();
    }
}
