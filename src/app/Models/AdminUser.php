<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminUser extends Model
{
    protected $table = 'adminUsers';

    protected $guarded = [];

    public function schools()
    {
        return $this->belongsTo('App\Models\School');
    }
}
