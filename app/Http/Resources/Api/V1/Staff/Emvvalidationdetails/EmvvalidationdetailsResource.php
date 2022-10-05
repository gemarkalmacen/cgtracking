<?php

namespace App\Http\Resources\Api\V1\Staff\Emvvalidationdetails;

use Illuminate\Http\Resources\Json\JsonResource;

class EmvvalidationdetailsResource extends JsonResource
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
            'hh_status' => $this->hh_status,
            'contact_no' => $this->contact_no,
            'assigned_staff' => $this->assigned_staff,
            'representative_name' => $this->representative_name,
            'grantee_id' => $this->grantee_id,
            'is_grantee' => $this->is_grantee,
            'is_minor' => $this->is_minor,
            'relationship_to_grantee' => $this->relationship_to_grantee,
            'contact_no_of' => $this->contact_no_of,
            'pawning_validation_detail_id' => $this->pawning_validation_detail_id,
            'nma_validation_id' => $this->nma_validation_id,
            'user_id' => $this->user_id,
            'sync_at' => $this->sync_at,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
