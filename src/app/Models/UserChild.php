<?php

namespace App\Models;

class UserChild extends BaseUuid
{
    protected $table = 'userChildren';

    protected $fillable = [
        'child_uuid',
        'parent_uuid'
    ];

    public function childParent()
    {
        return $this->hasOne(ChildParent::class, 'child_uuid');
    }

    public function userParent()
    {
        return $this->belongsToMany(UserParent::class, 'parent_uuid');
    }

    public function image()
    {
        return $this->morphMany(Image::class, 'target');
    }
}
