<?php

namespace App\Http\Controllers\Ajax\Topup;

use App\Http\Controllers\Controller;
use App\Services\Topup\GetListingTopup;

class TopupController extends Controller
{

    /**
     * Get products
     *
     * @param GetListingUsers $getListingUsers
     * @return \Illuminate\Http\JsonResponse
     */
    public function listing(GetListingTopup $getListingTopup)
    {
        $records = $getListingTopup->execute();
        return response()->json($records);
    }

}
