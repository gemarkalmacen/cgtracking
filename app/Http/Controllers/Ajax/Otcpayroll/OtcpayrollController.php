<?php

namespace App\Http\Controllers\Ajax\Otcpayroll;

use App\Http\Controllers\Controller;
use App\Services\Otcpayroll\GetListingOtcpayroll;

class OtcpayrollController extends Controller
{

    /**
     * Get products
     *
     * @param GetListingUsers $getListingUsers
     * @return \Illuminate\Http\JsonResponse
     */
    public function listing(GetListingEmvpayroll $getListingOtcpayroll)
    {
        $records = $getListingOtcpayroll->execute();
        return response()->json($records);
    }

}
