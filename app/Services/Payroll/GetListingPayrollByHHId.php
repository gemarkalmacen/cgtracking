<?php

namespace App\Services\Payroll;

use Ccore\Core\Datatable;
use Illuminate\Support\Facades\DB;

use App\Models\Payroll;

class GetListingPayrollByHHId
{
    /**
     * Get list of roles execution
     *
     * @return array
     */
    public function execute($hh_id)
    {
        $query = Payroll::select(['*'])->where('household_id', $hh_id);
        $result = Datatable::of($query, request(), [
            'searchable' => [
                'payroll_type',
                'year',
                'period',
                'mop',
                'card',
                'gross_amount',
            ],
            'orderable' => [
                'payroll_type',
                'year',
                'period',
                'mop',
                'card',
                'gross_amount',
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
