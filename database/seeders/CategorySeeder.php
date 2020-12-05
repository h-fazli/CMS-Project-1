<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Image;
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
//        $categories = Category::factory()->count(50)->create();

                $categories = Category::factory()->count(50)->create();

                $categories->each(function ($category) {
                Image::factory()->create(['imageable_type'=>Category::class,'imageable_id'=>$category->id]);
                });

//                  $image = Image::factory()->count(rand(0,1))
//                      ->create(['imageable_type'=>Category::class,'imageable_id'=>$category->id]);
//                if (rand(1,0)==1) {$category->Images()->save($image);}

//                $category->Images()->save(Image::factory()->count(rand(0,1))
//                    ->create());

//        });
    }
}
