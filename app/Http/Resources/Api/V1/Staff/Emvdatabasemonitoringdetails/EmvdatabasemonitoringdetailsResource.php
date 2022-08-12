<?php

namespace App\Http\Resources\Api\V1\Staff\Emvdatabasemonitoringdetails;

use Illuminate\Http\Resources\Json\JsonResource;

class EmvdatabasemonitoringdetailsResource extends JsonResource
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
            'assigned_staff' => $this->assigned_staff,
            'minor_grantee' => $this->minor_grantee,
            'contact' => $this->contact,
            'current_grantee_card_release_date' => $this->current_grantee_card_release_date,
            'current_grantee_card_release_place' => $this->current_grantee_card_release_place,
            'current_grantee_card_release_by' => $this->current_grantee_card_release_by,
            'current_grantee_is_available' => $this->current_grantee_is_available,
            'current_grantee_reason' => $this->current_grantee_reason,
            'current_grantee_card_number' => $this->current_grantee_card_number,
            'other_card_number_1' => $this->other_card_number_1,
            'other_card_holder_name_1' => $this->other_card_holder_name_1,
            'other_card_number_2' => $this->other_card_number_2,
            'other_card_holder_name_2' => $this->other_card_holder_name_2,
            'other_card_number_3' => $this->other_card_number_3,
            'other_card_holder_name_3' => $this->other_card_holder_name_3,
            'other_card_is_available' => $this->other_card_is_available,
            'other_card_reason' => $this->other_card_reason,
            'nma_amount' => $this->nma_amount,
            'nma_date_claimed' => $this->nma_date_claimed,
            'nma_reason' => $this->nma_reason,
            'nma_remarks' => $this->nma_remarks,
            'pawn_name_of_lender' => $this->pawn_name_of_lender,
            'pawn_date' => $this->pawn_date,
            'pawn_retrieved_date' => $this->pawn_retrieved_date,
            'pawn_status' => $this->pawn_status,
            'pawn_reason' => $this->pawn_reason,
            'pawn_offense_history' => $this->pawn_offense_history,
            'pawn_offense_date' => $this->pawn_offense_date,
            'pawn_remarks' => $this->pawn_remarks,
            'pawn_intervention_staff' => $this->pawn_intervention_staff,
            'pawn_other_details' => $this->pawn_other_details,
            'accomplish_e_signature' => $this->accomplish_e_signature,
            'informant_e_signature' => $this->informant_e_signature,
            'attested_by_e_signature' => $this->attested_by_e_signature,
            'attested_by_full_name' => $this->attested_by_full_name,
            'other_card_number_series_1' => $this->other_card_number_series_1,
            'other_card_number_series_2' => $this->other_card_number_series_2,
            'other_card_number_series_3' => $this->other_card_number_series_3,
            'emv_database_monitoring_id' => $this->emv_database_monitoring_id,
            'current_grantee_card_number_series' => $this->current_grantee_card_number_series,
            'user_id' => $this->user_id,
            'sync_at' => $this->sync_at,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
