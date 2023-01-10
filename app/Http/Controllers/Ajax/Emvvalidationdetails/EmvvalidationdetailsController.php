<?php

namespace App\Http\Controllers\Ajax\Emvvalidationdetails;

use App\Http\Controllers\Controller;
use App\Services\Emvvalidationdetails\GetListingEmvvalidationsDetails;
use App\Services\Emvvalidationdetails\GetListingEmvvalidationsDetailsList;

use Illuminate\Http\Request;

use App\Services\Emvvalidationdetails\details;

class EmvvalidationdetailsController extends Controller
{

    /**
     * Get products
     *
     * @param GetListingUsers $getListingUsers
     * @return \Illuminate\Http\JsonResponse
     */


     public function listing(GetListingEmvvalidationsDetailsList $getListingEmvvalidationsDetailsList)
     {

        $records = $getListingEmvvalidationsDetailsList->execute();
        return response()->json($records);

        
     }

    public function search(Request $request, GetListingEmvvalidationsDetails $getListingEmvvalidationsDetails)
    {
        // $records = $request->$getListingEmvvalidationsDetails->execute();
        // return response()->json($records);

        $records = $getListingEmvvalidationsDetails->execute($request->id);
        return response()->json($records);


    }
}
