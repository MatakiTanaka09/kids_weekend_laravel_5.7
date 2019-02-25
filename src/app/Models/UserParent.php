<?php

namespace App\Models;

class UserParent extends BaseUuid
{
    protected $table = 'userParents';

    protected $guarded = [
        'user_parent_id',
        'user_id'
    ];

    protected $hidden = [
        'u_zip_code1',
        'u_zip_code2',
        'u_state',
        'u_city',
        'u_address1',
        'u_address2'
    ];

    public function users()
    {
        return $this->belongsTo('App\User');
    }

    public function userChildren()
    {
        return $this->hasMany('App\Models\userChild', 'id', 'user_parent_id');
    }

    public function books()
    {
        return $this->hasMany('App\Models\Book');
    }

    public function images()
    {
        return $this->morphMany('App\Models\Image', 'target');
    }

}