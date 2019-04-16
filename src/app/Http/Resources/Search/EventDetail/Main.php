<?php

namespace App\Http\Resources\Search\EventDetail;

use App\Http\Resources\Search\EventDetail\Activity as ActivityResource;
use App\Http\Resources\Search\EventDetail\Event as EventResource;
use App\Http\Resources\Search\EventDetail\School as SchoolResource;
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
            "school"     => new SchoolResource($this->school),
            "activity"   => new ActivityResource($this->event->activity),
        ];
    }
}
