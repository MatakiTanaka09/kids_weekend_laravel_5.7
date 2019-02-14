<?php

namespace App\Models;

class Review extends BaseUuid
{
    protected $table = 'reviews';

    protected $guarded = [
        'id',
        'review_user_id',
        'event_id'
    ];

    public function activities()
    {
        return $this->belongsTo('App\Models\Activity');
    }
}
