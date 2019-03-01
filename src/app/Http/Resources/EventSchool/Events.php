<?php

namespace App\Http\Resources\EventSchool;

use App\Http\Resources\EventSchool\Activity as ActivityResource;
use App\Http\Resources\EventSchool\School as SchoolResource;
use Illuminate\Http\Resources\Json\JsonResource;

class Events extends JsonResource
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
            "uuid"                => $this->uuid,
            "school_uuid"         => $this->school_uuid,
            "date"                => $this->date,
            "started_at"          => $this->started_at,
            "ended_at"            => $this->ended_at,
            "capacity_members"    => $this->capacity_members,
            "target_min_age"      => $this->target_min_age,
            "target_max_age"      => $this->target_max_age,
            "parent_attendant"    => $this->parent_attendant,
            "price"               => $this->price,
            "canceled_at"         => $this->canceled_at,
            "arrived_at"          => $this->arrived_at,
            "state"               => $this->state,
            "city"                => $this->city,
            "address1"            => $this->address1,
            "address2"            => $this->address2,
            "longitude"           => $this->longitude,
            "latitude"            => $this->latitude,
            "activity"            => new ActivityResource($this->activity),
            "school"              => new SchoolResource($this->school)
        ];
    }
}
