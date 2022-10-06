<?php

namespace App\Http\Resources\Menu;

use Illuminate\Http\Resources\Json\JsonResource;

class MenuResource extends JsonResource
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
            'id' => $this->id,
            'name' => $this->name,
            "url" => $this->url,
            "parent_id" =>  $this->parent_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'children' => new MenuResourceCollection($this->allChildren),

        ];
    }
}
