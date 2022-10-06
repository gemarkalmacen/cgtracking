<?php

namespace App\Http\Resources\Api\V1\Staff\Emvvalidations;

use Illuminate\Http\Resources\Json\JsonResource;

class EmvvalidationResource extends JsonResource
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
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'middle_name' => $this->middle_name,
            'ext_name' => $this->ext_name,
            'hh_id' => $this->hh_id,
            'hh_status' => $this->hh_status,
            'province' => $this->province,
            'municipality' => $this->municipality,
            'barangay' => $this->barangay,
            'sex' => $this->sex,
            'hh_set_group' => $this->hh_set_group,
            'nma_amount' => $this->nma_amount,
            'grantee_card_number' => $this->grantee_card_number,
            'grantee_distribution_status' => $this->grantee_distribution_status,
            'grantee_card_release_date' => $this->grantee_card_release_date,
            'other_card_number_1' => $this->other_card_number_1,
            'other_card_holder_name_1' => $this->other_card_holder_name_1,
            'other_card_distribution_status_1' => $this->other_card_distribution_status_1,
            'other_card_release_date_1' => $this->other_card_release_date_1,
            'other_card_number_2' => $this->other_card_number_2,
            'other_card_holder_name_2' => $this->other_card_holder_name_2,
            'other_card_distribution_status_2' => $this->other_card_distribution_status_2,
            'other_card_release_date_2' => $this->other_card_release_date_2,
            'other_card_number_3' => $this->other_card_number_3,
            'other_card_holder_name_3' => $this->other_card_holder_name_3,
            'other_card_distribution_status_3' => $this->other_card_distribution_status_3,
            'other_card_release_date_3' => $this->other_card_release_date_3,
            'other_card_number_4' => $this->other_card_number_4,
            'other_card_holder_name_4' => $this->other_card_holder_name_4,
            'other_card_distribution_status_4' => $this->other_card_distribution_status_4,
            'other_card_release_date_4' => $this->other_card_release_date_4,
            'other_card_number_5' => $this->other_card_number_5,
            'other_card_holder_name_5' => $this->other_card_holder_name_5,
            'other_card_distribution_status_5' => $this->other_card_distribution_status_5,
            'other_card_release_date_5' => $this->other_card_release_date_5,
            'upload_history_id' => $this->upload_history_id,
            'record_counter' => $this->record_counter,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'validated_at' => $this->validated_at,
        ];
    }
}
