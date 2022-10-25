<?php

namespace App\Http\Resources\Api\V1\Staff\Syncmonitoring;

use Illuminate\Http\Resources\Json\JsonResource;

class SyncmonitoringResource extends JsonResource
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
            'sync_counter' => $this->sync_counter,
            'update_counter' => $this->update_counter,
            'pulldata_counter' => $this->pulldata_counter,
            'psgc_counter' => $this->psgc_counter,
            'user_id' => $this->user_id,
            'validators' => $this->validators,
            'sync_at' => $this->sync_at,
            'created_at' => $this->created_at,
        ];
    }
}
