<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Video extends Model
{
    public static function findBySlug($slug)
    {
        return static::where('slug', $slug)->firstOrFail();
    }
}
