<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $guarded = ['id'];

    public function categoryEvent()
    {
        return $this->hasMany(CategoryEvent::class);
    }
}
