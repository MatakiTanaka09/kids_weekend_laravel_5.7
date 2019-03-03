<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryEvent extends Model
{
    protected $table = 'categoryEvents';

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
