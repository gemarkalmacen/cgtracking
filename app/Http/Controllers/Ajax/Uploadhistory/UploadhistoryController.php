<?php

namespace App\Http\Controllers\Ajax\Uploadhistory;

use App\Http\Controllers\Controller;
use App\Services\Uploadhistory\GetListingUploadhistory;

class UploadhistoryController extends Controller
{

    /**
     * Get products
     *
     * @param GetListingUsers $getListingUsers
     * @return \Illuminate\Http\JsonResponse
     */
    public function listing(GetListingUploadhistory $getListingUploadhistory)
    {
                $records = $getListingUploadhistory->execute();
                return response()->json($records);
    }

}
