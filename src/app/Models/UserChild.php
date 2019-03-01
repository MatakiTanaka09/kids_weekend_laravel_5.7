<?php

namespace App\Models;

class UserChild extends BaseUuid
{
    protected $table = 'userChildren';

    protected $guarded = [
        'uuid',
        'parent_id'
    ];

    public function userParent()
    {
        return $this->belongsTo(UserParent::class);
    }

    public function image()
    {
        return $this->morphMany(Image::class, 'target');
    }
}
