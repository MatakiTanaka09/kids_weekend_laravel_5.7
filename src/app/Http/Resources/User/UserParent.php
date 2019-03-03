<?php

namespace App\Http\Resources\User;

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
            "first_name" => $this->first_name,
            "last_name"  => $this->last_name,
            "email"      => $this->user->email,
            "children"   => UserChildResource::collection($this->userChild),
        ];
    }
}
