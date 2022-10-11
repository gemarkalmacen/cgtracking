<?php

namespace App\Http\Controllers\Ajax\Emvvalidationdetails;

use App\Http\Controllers\Controller;
use App\Services\Emvmonitoringdetails\GetListingEmvmonitoringdetails;

class EmvvalidationdetailsController extends Controller
{

    /**
     * Get products
     *
     * @param GetListingUsers $getListingUsers
     * @return \Illuminate\Http\JsonResponse
     */
    public function listing(GetListingEmvmonitoringdetails $getListingEmvmonitoringdetails)
    {
        $records = $getListingEmvmonitoringdetails->execute();
        return response()->json($records);
    }
}
