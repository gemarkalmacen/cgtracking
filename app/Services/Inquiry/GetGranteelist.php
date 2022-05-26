<?php
namespace App\Services\Inquiry;

use App\Models\Granteelist;
use Illuminate\Support\Facades\DB;

class GetGranteelist
{
    public function execute($request_id)
    {
        $select = [
            'id',
            'region',
            'province',
            'municipality',
            'barangay',
            'purok',
            'address',
            'hh_id',
            'entryid',
            'lastname',
            'firstname',
            'middlename',
            'extensionname',
            'birthday',
            'age',
            'clientstatus',
            'member_status',
            'registrationstatus',
            'sex',
            'relationship_to_hh_head',
            'ipaffiliation',
            'hh_set',
            'group',
            'mothers_maiden',
            'date_of_enumeration',
            'lbp_account_number',
            'mode_of_payment',
            'date_tagged_hhstatus',
            'tagged_by',
            'date_registered',
            'created_at',
            'updated_at',
            'upload_history_id',
        ];
        $query = Granteelist::select($select)->where('hh_id', $request_id)->get();
        return $query;
    }
}
