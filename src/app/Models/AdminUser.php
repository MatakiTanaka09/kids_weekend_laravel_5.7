<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminUser extends Model
{
    protected $table = 'adminUsers';

    protected $guarded = ['school_uuid'];

    public function school()
    {
        return $this->belongsTo(School::class);
    }

    public function image()
    {
        return $this->morphMany(Image::class, 'target');
    }
}
