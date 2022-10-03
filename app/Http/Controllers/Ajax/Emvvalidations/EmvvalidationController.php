<?php

namespace App\Http\Controllers\Ajax\Emvvalidations;

use App\Http\Controllers\Controller;
use App\Services\Emvmonitoring\GetListingEmvmonitoring;

class EmvvalidationController extends Controller
{

    /**
     * Get products
     *
     * @param GetListingUsers $getListingUsers
     * @return \Illuminate\Http\JsonResponse
     */
    public function listing(GetListingEmvmonitoring $getListingEmvmonitoring)
    {
        $records = $getListingEmvmonitoring->execute();
        return response()->json($records);
    }

}
