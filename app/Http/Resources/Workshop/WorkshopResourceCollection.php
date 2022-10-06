<?php

namespace App\Http\Resources\Workshop;

use Illuminate\Http\Resources\Json\ResourceCollection;

class WorkshopResourceCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [WorkshopResource::collection($this->collection)];
    }
}
