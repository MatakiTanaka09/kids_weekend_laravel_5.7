<?php

namespace App\Http\Resources\User;

use Illuminate\Http\Resources\Json\JsonResource;

class UserChild extends JsonResource
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
            "uuid" => $this->uuid,
            "last_name" => $this->last_name,
            "first_name" => $this->first_name,
            "last_kana" => $this->last_kana,
            "first_kana" => $this->first_kana,
            "sex" => $this->sex,
            "birth_day" => $this->birth_day
        ];
    }
}
