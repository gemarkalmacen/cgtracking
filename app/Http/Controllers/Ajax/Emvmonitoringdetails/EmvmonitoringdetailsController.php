<?php

namespace App\Http\Controllers\Ajax\Emvmonitoringdetails;

use App\Http\Controllers\Controller;
use App\Services\Emvmonitoringdetails\GetListingEmvmonitoringdetails;

class EmvmonitoringdetailsController extends Controller
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
