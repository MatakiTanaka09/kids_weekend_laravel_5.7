<?php

namespace App\Http\Resources\Search\EventList;

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
            "time"           => $this->time,
            "started_at"     => $this->started_at,
            "target_min_age" => $this->target_min_age,
            "price"          => $this->price,
            "longitude"      => $this->longitude,
            "latitude"       => $this->latitude,
            "category_event" => new CategoryEventResource($this->categoryEvent)
        ];
    }
}
