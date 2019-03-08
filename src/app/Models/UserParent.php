<?php

namespace App\Models;

use App\User;

class UserParent extends BaseUuid
{
    protected $table = 'userParents';

    protected $guarded = [
        'uuid'
    ];

    protected $hidden = [
        'zip_code1',
        'zip_code2',
        'state',
        'city',
        'address1',
        'address2'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function userChild()
    {
        return $this->hasMany(UserChild::class, 'parent_uuid');
    }

    public function childParent()
    {
        return $this->hasMany(ChildParent::class, 'parent_uuid');
    }

    public function review()
    {
        return $this->hasMany(Review::class);
    }

    public function image()
    {
        return $this->morphMany(Image::class, 'target');
    }

}
