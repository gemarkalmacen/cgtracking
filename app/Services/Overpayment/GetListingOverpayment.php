<?php
namespace App\Services\Overpayment;

use Ccore\Core\Datatable;
use Illuminate\Support\Facades\DB;

use App\Models\Overpayment;
use App\Models\Role;

class GetListingOverpayment
{
    public function execute()
    {
        $query = Overpayment::select(['*']);

        $result = Datatable::of($query, request(), [
            'searchable' => [
                'row_no',
                'run_date',
                'lbp_account',
                'hh_id',
                'lastname',
                'firstname',
                'extension',
                'middlename',
                'filename',
                'ftp_request_filename',
                'date_claimed',
                'account_status',
                'account_balance',
                'date_acted_by_lbp',
                'ref_no',
                'account_status_remarks',
                'mc_no',
                'ref_matching',
                'matching_status',
                'distribution_status',
                'region',
                'status',
                'mop',
                'account number(db)',
                'old_account',
                'hh_status',
                'bal',
                'co_remarks',
                'upload_history_id',
                'created_at',
                'updated_at',
            ],
            'orderable' => [
                'row_no',
                'run_date',
                'lbp_account',
                'hh_id',
                'lastname',
                'firstname',
                'extension',
                'middlename',
                'filename',
                'ftp_request_filename',
                'date_claimed',
                'account_status',
                'account_balance',
                'date_acted_by_lbp',
                'ref_no',
                'account_status_remarks',
                'mc_no',
                'ref_matching',
                'matching_status',
                'distribution_status',
                'region',
                'status',
                'mop',
                'account number(db)',
                'old_account',
                'hh_status',
                'bal',
                'co_remarks',
                'upload_history_id',
                'created_at',
                'updated_at',
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
