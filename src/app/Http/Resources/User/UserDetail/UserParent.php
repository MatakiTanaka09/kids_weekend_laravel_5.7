<?php

namespace App\Http\Resources\User\UserDetail;

use App\Http\Resources\User\UserChild as UserChildResource;
use Illuminate\Http\Resources\Json\Resource;

class UserParent extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "uuid"       => $this->uuid,
            "email"      => $this->user->email,
            "full_name" => $this->full_name,
            "full_kana" => $this->full_kana,
            "tel"        => $this->tel,
            "sex"        => $this->sex,
            "zip_code"  => $this->zip_code,
            "address"   => $this->address,
            "children"   => UserChildResource::collection($this->userChild),
        ];
    }
}

