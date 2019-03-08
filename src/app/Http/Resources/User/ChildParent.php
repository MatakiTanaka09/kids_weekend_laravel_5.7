<?php

namespace App\Http\Resources\User;

use App\Http\Resources\User\UserParent as UserParentResource;
use App\Http\Resources\User\UserChild as UserChildResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ChildParent extends JsonResource
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
            'id' => $this->id,
            'child_uuid' => $this->child_uuid
        ];
    }
}
