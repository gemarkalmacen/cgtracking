<?php

namespace App\Http\Controllers\Ajax\Emvpayroll;

use App\Http\Controllers\Controller;
use App\Services\Emvpayroll\GetListingEmvpayroll;

class EmvpayrollController extends Controller
{

    /**
     * Get products
     *
     * @param GetListingUsers $getListingUsers
     * @return \Illuminate\Http\JsonResponse
     */
    public function listing(GetListingEmvpayroll $getListingEmvpayroll)
    {
        $records = $getListingEmvpayroll->execute();
        return response()->json($records);
    }

}
