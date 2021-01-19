<?php

namespace App\Http\Controllers\Ajax\Roles;

use App\Http\Controllers\Controller;
use App\Services\Roles\GetListingRoles;
use App\Services\Roles\GetRoles;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * @param GetListing roles
     * @return \Illuminate\Http\JsonResponse
     */
    public function listing(GetListingRoles $getListingRoles)
    {
        $records = $getListingRoles->execute();        
        return response()->json($records);
    }

    /**
     * @param GetRoles $getRoles
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(GetRoles $getRoles)
    {
        return response()->json($getRoles->execute());
    }    
}
