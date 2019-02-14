<?php

namespace App\Models;

class School extends BaseUuid
{

    protected $table = 'schools';

    protected $guarded = ['id'];

    public function activities()
    {
        return $this->hasMany('App\Models\Activity');
    }

    public function adminUsers()
    {
        return $this->hasMany('App\Models\AdminUser');
    }
}
