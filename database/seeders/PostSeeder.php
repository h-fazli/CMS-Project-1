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
//        Post::factory()->count(20)
//            ->has(Tag::random(rand(3,10)))
//            ->has(Category::random(rand(1,5)))
//            ->hasAttached(Image::factory()->count(1),['imageable_type'=>Post::class,'imageable_id'=>])
//            ->has(User::rand(1,20))
//            ->create();
//        $users = User::all();
        $tags = Tag::all();
        $categories = Category::all();
        $posts = Post::factory()->count(20)
            ->has(Image::factory()->count(1))
            ->create();

        $posts->each(function ($post) use ($tags,$categories){
                $post->tags()->attach($tags->random(rand(3,10)));
                $post->categories()->attach($categories->random(rand(1,5)));
//                $post->authors()->attach($users->random(1));
        });

    }
}
