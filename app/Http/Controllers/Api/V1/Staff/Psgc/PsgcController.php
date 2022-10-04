<?php

namespace App\Http\Controllers\Api\V1\Staff\Psgc;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\Api\V1\Staff\Emvvalidations\EmvvalidationResource;
use App\Http\Resources\Api\V1\Staff\Psgc\PsgcResource;
use App\Services\Api\V1\Staff\Psgc\GetPsgcList;

class PsgcController extends Controller
{

    public function __construct()
    {
        $this->middleware('permission:psgc-list', ['only' => ['index']]);
    }

    public function index(GetPsgcList $getPsgcList)
    {
        $response = $getPsgcList->execute();
        if(!$response){
            return response()->json([                
                'status' => __('messages.error'),
                'description' => __('messages.not_found'),
            ],404);
        }

        return response()->json([                
            'status' => __('messages.success'),
            'description' => __('messages.ok'),
            'data' => PsgcResource::collection($response)
        ],200);
    }

}
