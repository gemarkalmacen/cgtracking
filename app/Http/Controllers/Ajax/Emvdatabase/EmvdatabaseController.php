<?php

namespace App\Http\Controllers\Ajax\Emvdatabase;

use App\Http\Controllers\Controller;
use App\Services\Emvdatabase\GetListingEmvdatabase;

class EmvdatabaseController extends Controller
{

    /**
     * Get products
     *
     * @param GetListingUsers $getListingUsers
     * @return \Illuminate\Http\JsonResponse
     */
    public function listing(GetListingEmvdatabase $getListingEmvdatabase)
    {
        $records = $getListingEmvdatabase->execute();
        return response()->json($records);
    }

}
