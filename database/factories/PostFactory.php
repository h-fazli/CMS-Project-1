<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition()
    {
        return [
            'title' => $this->faker->name,
            'content' => $this->faker->text,
            'user_id' => $this->faker->numberBetween(1,20),
        ];
    }
}
