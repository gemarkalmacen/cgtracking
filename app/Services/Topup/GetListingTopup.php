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
                'period',
                'year',
                'payroll_type',
                'region',
                'province',
                'municipality',
                'barangay',
                'address_psgc',
                'lastname',
                'firstname',
                'middlename',
                'household_id',
                'hhs',
                'mop',
                'card',
                'payroll_date',
                'educ_dc_elem',
                'educ_jr_hs',
                'educ_sr_hs',
                'educ_total_hs',
                'total_educ',
                'health',
                'rice',
                'total_amount',
                'set',
                'set_group',
            ],
            'orderable' => [
                'period',
                'year',
                'payroll_type',
                'region',
                'province',
                'municipality',
                'barangay',
                'address_psgc',
                'lastname',
                'firstname',
                'middlename',
                'household_id',
                'hhs',
                'mop',
                'card',
                'payroll_date',
                'educ_dc_elem',
                'educ_jr_hs',
                'educ_sr_hs',
                'educ_total_hs',
                'total_educ',
                'health',
                'rice',
                'total_amount',
                'set',
                'set_group',
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
