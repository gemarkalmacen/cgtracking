<?php
namespace App\Services\Inquiry;

use Illuminate\Support\Facades\DB;

use App\Models\Emvdatabase;
use App\Models\Role;

class GetEmv
{
    public function execute($request_id)
    {
        // non emv - (mag stripe details)
        $select = [
            'id',
            'region',
            'province',
            'municipality',
            'barangay',
            'hh_id',
            'lbp_account',
            'run_date',
            'first_name',
            'mid_name',
            'last_name',
            'acct_description',
            'cct_type',
            'lbp_servicing_branch',
            'distribution_status',
            'date_claimed',
            'reason_why_unclaimed',
            'recommended_action',
            'action_taken',
            'date_acted',
            'agreed_distribution_date',
            'batch',
            'entry_id',
            'embossed_name',
            'emv_acct_discre',
            'hh_status',
            'hh_set',
            'upload_history_id',
            'created_at',
            'updated_at',
        ];
        $query = Emvdatabase::select($select)->where('hh_id', $request_id)->get();
        
        return $query;
    }
}
