<?php

namespace App\Models;

class Activity extends BaseUuid
{
    protected $table = "activities";

    public function event()
    {
        return $this->hasMany(Event::class);
    }

    public function school()
    {
        return $this->belongsTo(School::class);
    }

    public function image()
    {
        return $this->morphMany(Image::class, 'target');
    }
}
