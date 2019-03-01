<?php

namespace App\Models;

class School extends BaseUuid
{

    protected $table = 'schools';

    protected $guarded = ['uuid'];

    public function activity()
    {
        return $this->hasMany(Activity::class);
    }

    public function event()
    {
        return $this->hasMany(Event::class);
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
