<?php

namespace App\Http\Resources\Book;

use App\Http\Resources\Book\BookUserChildren as UserChildrenResource;
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
            "full_name"=> $this->full_name,
//            "children" => UserChildrenResource::collection($this->userChild),
        ];
    }
}
