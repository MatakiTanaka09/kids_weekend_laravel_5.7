<?php

namespace App\Models;

class Book extends BaseUuid
{
    protected $table = 'books';

    protected $guarded = ['uuid'];

    public function userParent()
    {
        return $this->belongsTo(UserParent::class);
    }

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
