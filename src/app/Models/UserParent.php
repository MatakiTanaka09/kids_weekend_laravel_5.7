<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Webpatser\Uuid\Uuid;

class UserParent extends Model
{
    protected $table = 'userParents';
    public $incrementing = false;


    protected $guarded = [
        'user_parent_id',
        'user_id'
    ];

    public function books()
    {
        return $this->hasMany('App\Models\Book');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->{$model->getKeyName()} = Uuid::generate()->string;
        });
    }
}
