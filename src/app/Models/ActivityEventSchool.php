<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActivityEventSchool extends Model
{
    protected $table = 'activityEventSchools';

    public function activity() {
        return $this->belongsTo(Activity::class);
    }

    public function event() {
        return $this->belongsTo(Event::class);
    }

    public function school() {
        return $this->belongsTo(School::class);
    }
}
