<?php
namespace App\Services\Topup;

use Ccore\Core\Datatable;
use Illuminate\Support\Facades\DB;

use App\Models\Topup;
use App\Models\Role;

class GetListingTopup
{
    /**
     * Get list of roles execution
     *
     * @return array
     */
    public function execute()
    {
        $query = Topup::select(['*']);

        $result = Datatable::of($query, request(), [
            'searchable' => [
                'account_number',
                'account_name',
                'amount',
                'transaction_sequence',
                'top_up_date',
                'lcc_top_up_batch_num',
                'cct_type',
                'payroll_type',
                'region',
                'hh_id',
                'period_covered',
                'lbp_top_up_status_report',
                'lbl_reject_reason',
            ],
            'orderable' => [
                'account_number',
                'account_name',
                'amount',
                'transaction_sequence',
                'top_up_date',
                'lcc_top_up_batch_num',
                'cct_type',
                'payroll_type',
                'region',
                'hh_id',
                'period_covered',
                'lbp_top_up_status_report',
                'lbl_reject_reason',
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
