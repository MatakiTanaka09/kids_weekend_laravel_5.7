<?php

namespace App\Models;

class Event extends BaseUuid
{
    //
    protected $table = 'events';

    protected $guarded = [
        'event_id', 'activity_id'
    ];

    public function books()
    {
        return $this->hasMany('App\Models\Book', 'event_id', 'event_id');
    }

    public function activities()
    {
        return $this->belongsTo('App\Models\Activity', 'activity_id', 'activity_id');
    }

    public function reviews()
    {
        return $this->hasMany('\App\Models\Review');
    }

    public function images()
    {
        return $this->morphMany('App\Models\Image', 'target');
    }
}
