<?php

namespace App\Models;

class Review extends BaseUuid
{
    protected $table = 'reviews';

    protected $guarded = [
        'uuid',
        'review_user_id',
        'event_id'
    ];

    public function activities()
    {
        return $this->belongsTo('App\Models\Event');
    }

    public function userParents()
    {
        return $this->belongsTo('App\Models\UserParent');
    }
}
