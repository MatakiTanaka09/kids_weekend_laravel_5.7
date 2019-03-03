<?php

namespace App\Models;

class Event extends BaseUuid
{
    protected $table = 'events';
//    protected $dates = ['started_at', 'ended_at'];

    protected $guarded = [
        'uuid'
    ];

    public function activityEventSchool() {
        return $this->hasMany(ActivityEventSchool::class);
    }

    public function book()
    {
        return $this->hasMany(Book::class);
    }

    public function review()
    {
        return $this->hasMany(Review::class);
    }

    public function categoryEvent()
    {
        return $this->hasOne(CategoryEvent::class);
    }

}
