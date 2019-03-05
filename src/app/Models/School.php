<?php

namespace App\Models;

class School extends BaseUuid
{

    protected $table = 'schools';

    protected $guarded = ['uuid'];

    public function activityEventSchool() {
        return $this->hasMany(ActivityEventSchool::class);
//        return $this->belongsToMany(ActivityEventSchool::class);
    }

    public function book()
    {
        return $this->hasMany(Book::class);
    }

    public function adminUser()
    {
        return $this->hasMany(AdminUser::class);
    }

    public function image()
    {
        return $this->morphMany(Image::class, 'target');
    }
}
