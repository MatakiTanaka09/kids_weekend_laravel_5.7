<?php

namespace App\Models;

class Book extends BaseUuid
{
    protected $table = 'books';

    protected $guarded = ['uuid'];

    public function userParents()
    {
        return $this->belongsTo('App\Models\UserParent');
    }

    public function events()
    {
        return $this->belongsTo('App\Models\Event');
    }
}
