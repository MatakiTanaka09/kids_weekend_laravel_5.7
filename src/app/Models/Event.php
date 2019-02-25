<?php

namespace App\Models;

class Event extends BaseUuid
{
    //
    protected $table = 'events';

    protected $guarded = [
        'uuid', 'activity_id'
    ];

    public function books()
    {
        return $this->hasMany('App\Models\Book');
    }

    public function activities()
    {
        return $this->hasOne('App\Models\Activity');
    }

    public function reviews()
    {
        return $this->hasMany('\App\Models\Review');
    }

}
