<?php

namespace App\Models;

class Activity extends BaseUuid
{
    protected $table = "activities";

    public function activityEventSchool() {
        return $this->hasMany(ActivityEventSchool::class);
//        return $this->belongsToMany(ActivityEventSchool::class);
    }

    public function event()
    {
        return $this->hasMany(Event::class);
    }

    public function image()
    {
        return $this->morphMany(Image::class, 'target');
    }
}
