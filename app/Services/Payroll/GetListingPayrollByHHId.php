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
        $query = Payroll::select(['*'])->crossJoin('top_up')
                        ->whereColumn('payroll.payroll_type', 'top_up.payroll_type')
                        ->whereRaw('payroll.year = SUBSTRING_INDEX(period_covered, " ", -1)')
                        ->whereRaw('payroll.period = SUBSTRING_INDEX(period_covered, " ", 1)')
                        ->where('payroll.household_id', $hh_id)
                        ->where('top_up.hh_id', $hh_id);

        $result = Datatable::of($query, request(), [
            'searchable' => [
                'payroll_type',
                'year',
                'period',
                'mop',
                'card',
                'gross_amount',
                'top_up_date',
                'account_number',
                'amount',
            ],
            'orderable' => [
                'payroll_type',
                'year',
                'period',
                'mop',
                'card',
                'gross_amount',
                'top_up_date',
                'account_number',
                'amount',
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
