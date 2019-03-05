<?php

namespace App\Http\Resources\Search\EventList;

use Illuminate\Http\Resources\Json\JsonResource;

class Activity extends JsonResource
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
            "pub_state" => $this->pub_state,
            "name" => $this->name,
        ];
    }
}
