<?php

namespace App\Models;

class Event extends BaseUuid
{
    //
    protected $table = 'events';
//    protected $dates = ['started_at', 'ended_at'];

    protected $guarded = [
        'uuid'
    ];

    public function book()
    {
        return $this->hasMany(Book::class);
    }

    public function activity()
    {
        return $this->belongsTo(Activity::class);
    }

    public function school()
    {
        return $this->belongsTo(School::class);
    }

    public function review()
    {
        return $this->hasMany(Review::class);
    }

}
