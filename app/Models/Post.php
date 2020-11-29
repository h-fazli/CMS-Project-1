<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory,SoftDeletes;

    protected $guarded =[];

    public function setSlugAttribute()
    {
        $this->attributes['slug'] = Str::slug(strtoupper($this->attributes['title']));
    }

    public function authors()
    {
        return $this->belongsTo(User::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function images()
    {
        return $this->morphOne(Image::class,'imageable');
    }
}
