<?php

namespace App\Http\Resources\Book;

use Illuminate\Http\Resources\Json\JsonResource;

class Event extends JsonResource
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
            "date"             => $this->date,
            "started_at"       => $this->started_at,
            "ended_at"         => $this->ended_at,
            "parent_attendant" => $this->parent_attendant,
            "price"            => $this->price,
            "canceled_at"      => $this->canceled_at,
            "arrived_at"       => $this->arrived_at,
            "longitude"        => $this->longitude,
            "latitude"         => $this->latitude
        ];
    }
}
