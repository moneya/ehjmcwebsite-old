<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Admissionlist extends Model
{
    public static function findBySlug($slug)
    {
        return static::where('slug', $slug)->firstOrFail();
    }
}
