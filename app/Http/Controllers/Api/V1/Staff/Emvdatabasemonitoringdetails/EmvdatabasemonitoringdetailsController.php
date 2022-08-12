<?php

namespace App\Http\Controllers\Api\V1\Staff\Emvdatabasemonitoringdetails;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Api\V1\Staff\Emvdatabasemonitoring\PullDataEmvDatabaseMonitoringById;
use App\Services\Api\V1\Staff\Emvdatabasemonitoring\GetEmvDatabaseMonitoringByHhId;
use App\Services\Api\V1\Staff\Emvdatabasemonitoring\CountEmvDatabaseMonitoringById;
use App\Http\Resources\Api\V1\Staff\Emvdatabasemonitoring\EmvdatabasemonitoringResource;
use App\Services\Api\V1\Staff\Emvdatabasemonitoring\UpdaterEmvDatabaseMonitoring;

class EmvdatabasemonitoringdetailsController extends Controller
{

    public function __construct()
    {
        // $this->middleware('permission:apiemvdatabasemonitoring-view', ['only' => ['show']]);
    }

    public function sync()
    {
        dd("test123");
    }

    public function pulldata($id, PullDataEmvDatabaseMonitoringById $pullDataEmvDatabaseMonitoringById, CountEmvDatabaseMonitoringById $countEmvDatabaseMonitoringById)
    {
        // $response = $pullDataEmvDatabaseMonitoringById->execute($id);
        // $counter_response = $countEmvDatabaseMonitoringById->execute($id);

        // if(!$response){
        //     return response()->json([                
        //         'status' => __('messages.error'),
        //         'description' => __('messages.not_found'),
        //     ],404);
        // }
        
        // return response()->json([                
        //     'status' => __('messages.success'),
        //     'total_data_count' => $counter_response,
        //     'description' => __('messages.ok'),
        //     'data' => EmvdatabasemonitoringResource::collection($response)
        // ],200);
    }

    public function updater(UpdaterEmvDatabaseMonitoring $updaterEmvDatabaseMonitoring){
        // $response = $updaterEmvDatabaseMonitoring->execute();
        // if(!$response){
        //     return response()->json([                
        //         'status' => __('messages.error'),
        //         'description' => __('messages.not_found'),
        //     ],404);
        // }
        
        // return response()->json([                
        //     'status' => __('messages.success'),
        //     'description' => __('messages.ok'),
        //     'data' => EmvdatabasemonitoringResource::collection($response)
        // ],200);
    }

}
