<?php
namespace App\Services\Inquiry;

use Ccore\Core\Datatable;
use Illuminate\Support\Facades\DB;

use App\Models\Payroll;
use App\Models\Nonemv;
use App\Models\Role;

class GetPayroll
{
    public function execute($request_id)
    {
        // non emv - (mag stripe details)
        $select = [
            'entry_number',
            'card_number',
            'last_name',
            'first_name',
            'middle_name',
            'card_status',
            'card_holder_status'
            // DB::raw('
            //     CONCAT( stocks.discount_percentage, "%") AS percentage
            // '),
            // DB::raw('
            //     (SELECT
            //         IFNULL(SUM(o.quantity), stocks.quantity)  AS total_orders_quantity
            //     FROM
            //         orders AS o
            //         LEFT JOIN order_details AS od ON od.id = o.order_details_id
            //     WHERE
            //         o.stocks_id = stocks.id)
            //     AS remaining_qty')
        ];
        $query = Nonemv::select($select)->where('hh_id', $request_id)->get();
        // emv 
        
        // $query = Payroll::where('household_id', )
        
        return $query;
    }
}
