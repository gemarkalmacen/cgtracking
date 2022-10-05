<?php

namespace App\Http\Controllers\Ajax\Emvvalidationdetails;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\V1\Staff\Emvvalidationdetails\EmvvalidationdetailsResource;
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

        // return EmvvalidationdetailsResource::collection($records);
    }

}
