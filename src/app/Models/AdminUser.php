<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminUser extends Model
{
    protected $table = 'adminUsers';

    protected $guarded = ['school_id'];

    public function schools()
    {
        return $this->belongsTo('App\Models\School');
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'target');
    }
}
