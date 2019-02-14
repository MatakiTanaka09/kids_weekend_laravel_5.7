<?php

namespace App\Models;

class Activity extends BaseUuid
{
    protected $table = "activities";

    public function events()
    {
        return $this->belongsTo('\App\Models\Event');
    }

    public function schools()
    {
        return $this->belongsTo('\App\Models\School');
    }

    public function categories()
    {
        return $this->belongsTo('\App\Models\Category');
    }
}
