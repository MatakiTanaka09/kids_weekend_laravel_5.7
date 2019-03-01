<?php

namespace App\Http\Resources\EventSchool;

use Illuminate\Http\Resources\Json\JsonResource;

class School extends JsonResource
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
            "uuid"     => $this->uuid,
            "name"     => $this->name,
            "detail"   => $this->detail,
            "email"    => $this->email,
            "url"      => $this->url,
            "tel"      => $this->tel,
            "state"    => $this->state,
            "city"     => $this->city,
            "address1" => $this->address1,
            "address2" => $this->address2,
        ];
    }
}
