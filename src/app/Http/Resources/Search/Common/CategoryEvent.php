<?php

namespace App\Http\Resources\Search\Common;

use App\Http\Resources\Search\Common\Category as CategoryResource;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoryEvent extends JsonResource
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
            "category" => new CategoryResource($this->category)
        ];
    }
}
