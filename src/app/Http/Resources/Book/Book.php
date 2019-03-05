<?php

namespace App\Http\Resources\Book;

use App\Http\Resources\Book\Event as EventResource;
use App\Http\Resources\Book\School as SchoolResource;
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
            "uuid"      => $this->uuid,
            "price"     => $this->price,
            "book_user" => new BookUserResource($this->userParent),
            "event"     => new EventResource($this->event),
            "school"    => new SchoolResource($this->school),
        ];
    }
}
