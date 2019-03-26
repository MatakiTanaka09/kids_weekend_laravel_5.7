<?php

namespace App\Http\Resources\User;

use App\Http\Resources\Book\BookUserChildren as UserChildResource;
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
            "uuid"      => $this->uuid,
            "full_name" => $this->full_name,
            "full_kana" => $this->full_kana,
            "email"     => $this->user->email,
            "children"  => UserChildResource::collection($this->userChild)
        ];
    }
}
