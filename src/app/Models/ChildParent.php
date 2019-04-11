<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChildParent extends Model
{
    protected $table = 'childParents';

    public function userChild()
    {
        return $this->belongsTo(UserChild::class);
    }

    public function userParent()
    {
        return $this->belongsTo(UserParent::class);
    }
}
