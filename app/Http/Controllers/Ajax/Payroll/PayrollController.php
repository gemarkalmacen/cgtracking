<?php

namespace App\Http\Controllers\Ajax\Payroll;

use App\Http\Controllers\Controller;
use App\Services\Payroll\GetListingPayroll;

class PayrollController extends Controller
{

    /**
     * Get products
     *
     * @param GetListingUsers $getListingUsers
     * @return \Illuminate\Http\JsonResponse
     */
    public function listing(GetListingPayroll $getListingPayroll)
    {
        $records = $getListingPayroll->execute();
        return response()->json($records);
    }

}
