<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail as MustVerifyEmailContract;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;
use App\Notifications\CustomPasswordReset;
use Illuminate\Auth\MustVerifyEmail;
use App\Notifications\VerifyEmailJapanese;

class User extends Authenticatable implements JWTSubject, MustVerifyEmailContract
{
    use MustVerifyEmail, Notifiable;

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'role',
        'remember_token',
    ];

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new CustomPasswordReset($token));
    }

    public function sendEmailVerificationNotification()
    {
        $this->notify(new VerifyEmailJapanese);
    }

    public function userParent()
    {
        $this->hasOne(UserParent::class);
    }
}
