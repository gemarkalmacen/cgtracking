<?php

namespace App\Http\Resources\Api\V1\Staff\Emvdatabasemonitoring;

use Illuminate\Http\Resources\Json\JsonResource;

class EmvdatabasemonitoringResource extends JsonResource
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
            'full_name' => $this->full_name,
            'hh_id' => $this->hh_id,
            'client_status' => $this->client_status,
            'address' => $this->address,
            'sex' => $this->sex,
            'hh_set_group' => $this->hh_set_group,
            'current_grantee_card_number' => $this->current_grantee_card_number,
            'other_card_number_1' => $this->other_card_number_1,
            'other_card_holder_name_1' => $this->other_card_holder_name_1,
            'other_card_number_2' => $this->other_card_number_2,
            'other_card_holder_name_2' => $this->other_card_holder_name_2,
            'other_card_number_3' => $this->other_card_number_3,
            'other_card_holder_name_3' => $this->other_card_holder_name_3,
            'upload_history_id' => $this->upload_history_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'validated_at' => $this->validated_at,
        ];
    }
}
