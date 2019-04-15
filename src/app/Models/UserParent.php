<?php

namespace App\Models;

class UserParent extends BaseUuid
{
    protected $table = 'userParents';

    protected $guarded = [
        'uuid'
    ];

//    protected $hidden = [
//        'zip_code1',
//        'zip_code2',
//        'state',
//        'city',
//        'address1',
//        'address2'
//    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function userChild()
    {
        return $this->hasMany(UserChild::class, 'parent_uuid');
    }

    public function book()
    {
        return $this->hasMany(Book::class, 'uuid');
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
