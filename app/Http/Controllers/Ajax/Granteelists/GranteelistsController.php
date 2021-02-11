<?php

namespace App\Http\Controllers\Ajax\Granteelists;

use App\Http\Controllers\Controller;
use App\Services\Granteelists\GetListingGranteelist;

class GranteelistsController extends Controller
{

    /**
     * Get products
     *
     * @param GetListingUsers $getListingUsers
     * @return \Illuminate\Http\JsonResponse
     */
    public function listing(GetListingGranteelist $getListingGranteelist)
    {
        $records = $getListingGranteelist->execute();
        return response()->json($records);
    }

}
