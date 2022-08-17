<?php

namespace App\Http\Controllers\Ajax\Emvdatabasemonitoringdetails;

use App\Http\Controllers\Controller;

use App\Services\Emvmonitoringdetails\getBlob;

class EmvdatabasemonitoringdetailsController extends Controller
{

    /**
     * Get products
     *
     * @param GetListingUsers $getListingUsers
     * @return \Illuminate\Http\JsonResponse
     */
    public function getBlob(getBlob $getBlob)
    {
        $data = $getBlob->execute();
        return response()->json($data);
    }
}
