<?php

namespace App\Http\Controllers\Api\V1\Staff\Granteelists;

use App\Http\Controllers\Staff\BaseController as Controller;
use App\Http\Resources\GranteelistResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Models\Granteelist;
use OpenApi\Examples\Petstore30\Models\Category;

// use App\Http\Requests\Roles\RoleStoreRequest;

class GranteelistController extends Controller
{
    /**
     * Initialization
     */
    // public function __construct()
    // {
    //     parent::__construct();
    //     // permissions
    //     $this->middleware('permission:api-granteelists-list', ['only' => ['index']]);
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $granteelist = Granteelist::select(
            'id', 
            'region', 
            'province', 
            'municipality', 
            'barangay', 
            'purok', 
            'address', 
            'hh_id',
        )->paginate(100);
        return GranteelistResource::collection($granteelist);
    }

}
