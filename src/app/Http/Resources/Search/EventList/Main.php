<?php

namespace App\Http\Resources\Search\EventList;


use App\Http\Resources\Search\Top\Event as EventResource;
use Illuminate\Http\Resources\Json\JsonResource;

class Main extends JsonResource
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
            "event_uuid" => $this->event_uuid,
            "event"      => new EventResource($this->event),

        ];
    }
}
