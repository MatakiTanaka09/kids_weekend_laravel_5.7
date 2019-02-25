<?php

namespace App\Models;

class School extends BaseUuid
{

    protected $table = 'schools';

    protected $guarded = ['uuid'];

    public function activities()
    {
        return $this->hasMany('App\Models\Activity');
    }

    public function adminUsers()
    {
        return $this->hasMany('App\Models\AdminUser');
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'target');
    }
}
