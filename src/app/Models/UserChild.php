<?php

namespace App\Models;

class UserChild extends BaseUuid
{
    protected $table = 'userChildren';

    protected $guarded = [
        'uuid',
        'user_parent_id'
    ];

    public function userParents()
    {
        return $this->belongsTo('App\Models\UserParent');
    }
}
