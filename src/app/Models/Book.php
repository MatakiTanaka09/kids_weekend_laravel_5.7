<?php

namespace App\Models;

class Book extends BaseUuid
{
    protected $table = 'books';

    protected $guarded = ['uuid'];

    public function userParent()
    {
        return $this->belongsTo(UserParent::class, 'parent_uuid');
    }
    public function userChild()
    {
        return $this->belongsTo(UserChild::class, 'child_uuid');
    }
    public function event()
    {
        return $this->belongsTo(Event::class);
    }
    public function school()
    {
        return $this->belongsTo(School::class);
    }
}
