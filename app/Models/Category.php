<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug(Str::random(7) . '' . $value);
    }

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }

    public function images()
    {
        return $this->morphOne(Image::class,'imageable');
    }
}
