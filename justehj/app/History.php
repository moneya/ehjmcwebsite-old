<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class History extends Model
{
    public static function findBySlug($slug)
    {
        return static::where('slug', $slug)->firstOrFail();
    }
}
