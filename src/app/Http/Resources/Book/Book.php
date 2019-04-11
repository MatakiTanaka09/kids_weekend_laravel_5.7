<?php

namespace App\Http\Resources\Book;

use App\Http\Resources\Book\Activity as ActivityResource;
use App\Http\Resources\Book\Event as EventResource;
use App\Http\Resources\Book\School as SchoolResource;
use App\Http\Resources\Book\BookUser as BookUserResource;
use App\Http\Resources\Book\BookUserChildren as BookUserChildResource;
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
            "uuid"        => $this->uuid,
            "price"       => $this->price,
            "status"      => $this->status,
            "user_parent" => new BookUserResource($this->userParent),
            "user_child"  => new BookUserChildResource($this->userChild),
            "event"       => new EventResource($this->event),
            "activity"    => new ActivityResource($this->event->activity),
            "school"      => new SchoolResource($this->school),
        ];
    }
}
