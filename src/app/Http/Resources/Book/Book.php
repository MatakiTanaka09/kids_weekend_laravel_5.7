<?php

namespace App\Http\Resources\Book;

use App\Http\Resources\UserParent as UserParentResource;
use App\Http\Resources\Book\BookUser as BookUserResource;
use Illuminate\Http\Resources\Json\JsonResource;

class Book extends JsonResource
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
            "uuid" => $this->uuid,
            "price" => $this->price,
            "book_user" => new BookUserResource($this->userParent)
        ];
    }
}
