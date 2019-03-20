<?php

namespace App\Http\Resources\User\UserDetail;

use App\Http\Resources\User\ChildParent as ChildParentResource;
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
            "first_name" => $this->first_name,
            "last_name"  => $this->last_name,
            "last_kana"  => $this->last_kana,
            "first_kana" => $this->first_kana,
            "tel"        => $this->tel,
            "sex"        => $this->sex,
            "zip_code1"  => $this->zip_code1,
            "zip_code2"  => $this->zip_code2,
            "state"      => $this->state,
            "city"       => $this->city,
            "address1"   => $this->address1,
            "address2"   => $this->address2,
            "children"   => UserChildResource::collection($this->userChild),
            "children_id" => ChildParentResource::collection($this->childParent)
        ];
    }
}

