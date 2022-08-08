<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GranteelistResource extends JsonResource
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
            'region' => $this->region,
            'province' => $this->province,
            'municipality' => $this->municipality,
            'barangay' => $this->barangay,
            'purok' => $this->purok,
            'address' => $this->address,
            'hh_id' => $this->hh_id,
            'entryid' => $this->entryid,
            'lastname' => $this->lastname,
            'firstname' => $this->firstname,
            'middlename' => $this->middlename,
            'extensionname' => $this->extensionname,
            'birthday' => $this->birthday,
            'age' => $this->age,
            'clientstatus' => $this->clientstatus,
            'member_status' => $this->member_status,
            'registrationstatus' => $this->registrationstatus,
            'sex' => $this->sex,
            'relationship_to_hh_head' => $this->relationship_to_hh_head,
            'ipaffiliation' => $this->ipaffiliation,
            'hh_set' => $this->hh_set,
            'group' => $this->group,
            'mothers_maiden' => $this->mothers_maiden,
            'date_of_enumeration' => $this->date_of_enumeration,
            'lbp_account_number' => $this->lbp_account_number,
            'mode_of_payment' => $this->mode_of_payment,
            'date_tagged_hhstatus' => $this->date_tagged_hhstatus,
            'tagged_by' => $this->tagged_by,
            'date_registered' => $this->date_registered,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'upload_history_id' => $this->upload_history_id,
        ];
    }
}
