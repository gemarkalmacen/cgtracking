<?php

namespace App\Http\Controllers\Ajax\Users;

use App\Http\Controllers\Controller;
use App\Services\Users\GetListingUsers;

class UserController extends Controller
{

    /**
     * Get products
     *
     * @param GetListingUsers $getListingUsers
     * @return \Illuminate\Http\JsonResponse
     */
    public function listing(GetListingUsers $getListingUsers)
    {
        $records = $getListingUsers->execute();
        return response()->json($records);
    }

}
