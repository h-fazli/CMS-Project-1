<?php

namespace Database\Factories;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    protected $model = Image::class;

    public function definition()
    {
        return [
            'title'=> $this->faker->word,
            'path' => $this->faker->image(storage_path(). '/app/public/' . env('UPLOAD_FOLDER')),
        ];
    }
}
