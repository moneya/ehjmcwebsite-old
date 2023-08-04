<?php

namespace App;
use TCG\Voyager\Traits\Spatial;
use Illuminate\Database\Eloquent\Model;


class Event extends Model
{
    public static function findBySlug($slug)
    {
        return static::where('slug', $slug)->firstOrFail();
    }
}
