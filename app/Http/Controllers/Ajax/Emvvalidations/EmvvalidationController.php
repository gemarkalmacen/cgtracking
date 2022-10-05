<?php

namespace App\Http\Controllers\Ajax\Emvvalidations;

use App\Http\Controllers\Controller;
use App\Services\Emvvalidations\GetListingEmvvalidations;

class EmvvalidationController extends Controller
{

    /**
     * Get products
     *
     * @param GetListingUsers $getListingUsers
     * @return \Illuminate\Http\JsonResponse
     */
    public function listing(GetListingEmvvalidations $GetListingEmvvalidations)
    {
        $records = $GetListingEmvvalidations->execute();
        return response()->json($records);
    }

}
