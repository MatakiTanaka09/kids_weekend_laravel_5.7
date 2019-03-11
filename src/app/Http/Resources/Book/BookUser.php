<?php

namespace App\Http\Resources\Book;

use App\Http\Resources\Book\BookUserChildren as UserChildrenResource;
use App\Http\Resources\User\ChildParent as ChildParentResource;
use Illuminate\Http\Resources\Json\JsonResource;

class BookUser extends JsonResource
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
            "first_name"=> $this->first_name,
            "last_name" => $this->last_name,
            "email" => $this->user->email,
            "children" => UserChildrenResource::collection($this->userChild),
            "children_id" => ChildParentResource::collection($this->childParent)
        ];
    }
}
