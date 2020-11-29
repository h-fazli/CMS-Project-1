<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Tag extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function setSlugAttribute()
    {
        $this->attributes['slug'] = Str::slug(strtoupper($this->attributes['title']));
    }

    public function posts()
    {
        $this->belongsToMany(Post::class);
    }

}
