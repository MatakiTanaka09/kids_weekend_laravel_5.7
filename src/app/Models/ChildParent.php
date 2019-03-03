<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChildParent extends Model
{
    protected $table = 'childParents';

    public function userChild()
    {
        return $this->belongsToMany(UserChild::class);
    }

    public function userParent()
    {
        return $this->belongsToMany(UserParent::class);
    }
}
