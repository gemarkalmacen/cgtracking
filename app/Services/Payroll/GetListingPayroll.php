<?php
namespace App\Services\Payroll;

use Ccore\Core\Datatable;
use Illuminate\Support\Facades\DB;

use App\Models\Payroll;
use App\Models\Role;

class GetListingPayroll
{
    /**
     * Get list of roles execution
     *
     * @return array
     */
    public function execute()
    {
        $query = Payroll::select(['*']);

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
                'hhset',
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
                'gross_amount',
                'adjustment_amount',
                'net_amount',
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
                'hhset',
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
                'gross_amount',
                'adjustment_amount',
                'net_amount',
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
