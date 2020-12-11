<?php

namespace Database\Factories;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    protected $model = Image::class;

    public function definition()
    {
        $path = $this->faker->image(storage_path() . env('UPLOAD_FOLDER'));
        $path = explode("/storage/", $path);
        return [
            'title'=> $this->faker->word,
            'path' =>  env('APP_URL') . "/storage/" . end($path),
        ];
    }
}
