<?php

namespace App\Http\Controllers\Api\V1\Staff\Syncmonitoring;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\Staff\Syncmonitoring\SyncmonitoringRequest;
use Illuminate\Http\Request;
use App\Http\Resources\Api\V1\Staff\Emvvalidations\EmvvalidationResource;
use App\Http\Resources\Api\V1\Staff\Psgc\PsgcResource;
use App\Http\Resources\Api\V1\Staff\Syncmonitoring\SyncmonitoringResource;
use App\Services\Api\V1\Staff\Psgc\GetPsgcList;
use App\Services\Api\V1\Staff\Syncmonitoring\CreateSyncmonitoring;
use App\Services\Api\V1\Staff\Syncmonitoring\ListSyncMonitoring;

class SyncmonitoringController extends Controller
{

    public function __construct()
    {
        $this->middleware('permission:syncmonitoring-list', ['only' => ['index', '']]);
    }

    public function index(ListSyncMonitoring $listSyncMonitoring)
    {
        
        $response = $listSyncMonitoring->execute();
        if(!$response){
            return response()->json([                
                'status' => __('messages.error'),
                'description' => __('messages.not_found'),
            ],404);
        }
        
        return response()->json([                
            'status' => __('messages.success'),
            'description' => __('messages.ok'),
            'data' => SyncmonitoringResource::collection($response)
        ],200);
    }

    public function store(SyncmonitoringRequest $request, CreateSyncmonitoring $createSyncmonitoring)
    {
        $response = $createSyncmonitoring->execute($request);

        if(!$response){
            return response()->json([                
                'status' => __('messages.error'),
                'description' => __('messages.not_found'),
            ],404);
        }
        
        return response()->json([                
            'status' => __('messages.success'),
            'description' => __('staff/notifications.sync_monitoring_created_successfully'),
            'data' => $response
        ],200);
    }

}
