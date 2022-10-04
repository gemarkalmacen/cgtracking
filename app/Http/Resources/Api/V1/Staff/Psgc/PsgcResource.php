<?php

namespace App\Http\Resources\Api\V1\Staff\Psgc;

use Illuminate\Http\Resources\Json\JsonResource;

class PsgcResource extends JsonResource
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
            'name_new' => $this->name_new,
            'name_old' => $this->name_old,
            'code' => $this->code,
            'correspondence_code' => $this->correspondence_code,
            'geographic_level' => $this->geographic_level,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
