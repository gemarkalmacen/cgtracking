<?php

namespace App\Http\Controllers\Ajax\Overpayment;

use App\Http\Controllers\Controller;
use App\Services\Overpayment\GetListingOverpayment;

class OverpaymentController extends Controller
{

    /**
     * Get products
     *
     * @param GetListingUsers $getListingUsers
     * @return \Illuminate\Http\JsonResponse
     */
    public function listing(GetListingOverpayment $getListingOverpayment)
    {
        $records = $getListingOverpayment->execute();
        return response()->json($records);
    }

}
