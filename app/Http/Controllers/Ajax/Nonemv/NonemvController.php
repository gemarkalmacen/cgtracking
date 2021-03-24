<?php

namespace App\Http\Controllers\Ajax\Nonemv;

use App\Http\Controllers\Controller;
use App\Services\Nonemv\GetListingNonemv;

class NonemvController extends Controller
{

    /**
     * Get products
     *
     * @param GetListingUsers $getListingUsers
     * @return \Illuminate\Http\JsonResponse
     */
    public function listing(GetListingNonemv $getListingNonemv)
    {
        $records = $getListingNonemv->execute();
        return response()->json($records);
    }

}
