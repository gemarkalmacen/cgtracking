<?php
namespace App\Services\Inquiry;

use Ccore\Core\Datatable;
use Illuminate\Support\Facades\DB;

use App\Models\Payroll;
use App\Models\Nonemv;
use App\Models\Role;

class GetNonemv
{
    public function execute($request_id)
    {
        // non emv - (mag stripe details)
        $select = [
            'id',
            'row_id',
            'card_number',
            'last_name',
            'first_name',
            'middle_name',
            'naa_address',
            'cif_permanent_address',
            'cif_present_address',
            'nationality_cif_tel_no',
            'entry_number',
            'card_status',
            'birthday',
            'balance_as_of',
            'account_balance',
            'hh_id',
            'card_holder_status',
            'province',
            'municipality',
            'barangay',
            'hh_first_name',
            'hh_middle_name',
            'hh_last_name',
            'hh_ext_name',
            'hh_birthdate',
            'entry_id',
            'mothers_maiden_name',
            'client_status',
            'payment_mode',
            'hh_set',
            'set_group',
            'hh_card_number',
            'kyc_remarks',
            'account_number_remarks',
            'age_bracket',
            'amount_bracket',
            'nma_remarks',
            'nma_remarks_reason',
            'nma_recommended_action',
            'upload_history_id',
            'created_at',
            'updated_at',
        ];
        $query = Nonemv::select($select)->where('hh_id', $request_id)->get();
        
        return $query;
    }
}
