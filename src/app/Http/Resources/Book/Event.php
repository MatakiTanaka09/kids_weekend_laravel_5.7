<?php

namespace App\Http\Resources\Book;

use App\Http\Resources\Search\Common\CategoryEvent as CategoryEventResource;
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
            "started_at" => $this->started_at,
            "address1"   => $this->address1,
            "longitude"  => $this->longitude,
            "latitude"   => $this->latitude,
            "category_event" => new CategoryEventResource($this->categoryEvent),
        ];
    }
}
