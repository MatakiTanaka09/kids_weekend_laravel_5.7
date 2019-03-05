<?php

namespace App\Models;

class Review extends BaseUuid
{
    protected $table = 'reviews';

    protected $guarded = [
        'uuid',
        'review_user_uuid',
        'event_uuid'
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function userParent()
    {
        return $this->belongsTo(UserParent::class);
    }
}
