<?php

namespace App\Models;

class UserChild extends BaseUuid
{
    protected $table = 'userChildren';

    protected $fillable = [
        'child_uuid',
        'parent_uuid'
    ];

    public function userParent()
    {
        return $this->belongsToMany(UserParent::class, 'parent_uuid');
    }
    public function book()
    {
        return $this->hasMany(Book::class, 'uuid');
    }

    public function image()
    {
        return $this->morphMany(Image::class, 'target');
    }
}
