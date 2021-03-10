<?php
namespace App\Services\Emvdatabase;

use Ccore\Core\Datatable;
use Illuminate\Support\Facades\DB;

use App\Models\Emvdatabase;
use App\Models\Role;

class GetListingEmvdatabase
{
    /**
     * Get list of roles execution
     *
     * @return array
     */
    public function execute()
    {
        $query = Emvdatabase::select(['*']);

        $result = Datatable::of($query, request(), [
            'searchable' => [
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
            ],
            'orderable' => [
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
            ]
        ]);

        $records = $result['query']->get();

        return [
            'data' => $records,
            'draw' => intval(request()->draw),
            'recordsTotal' => $result['total'],
            'recordsFiltered' => $result['total']
        ];
    }
}
