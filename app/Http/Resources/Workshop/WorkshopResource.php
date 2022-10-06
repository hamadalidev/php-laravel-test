<?php

namespace App\Http\Resources\Workshop;

use Illuminate\Http\Resources\Json\JsonResource;

class WorkshopResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     * @throws \Exception
     */
    public function toArray($request)
    {
        return [
            "id"=> $this->id,
            "start"=> $this->start,
            "end"=> $this->end,
            "event_id"=> $this->event_id,
            "name"=> $this->name,
            "created_at"=> $this->created_at,
            "updated_at"=> $this->updated_at
        ];
    }
}
