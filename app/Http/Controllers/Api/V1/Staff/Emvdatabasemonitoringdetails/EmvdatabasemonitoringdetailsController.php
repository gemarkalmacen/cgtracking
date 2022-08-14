<?php

namespace App\Http\Controllers\Api\V1\Staff\Emvdatabasemonitoringdetails;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Api\V1\Staff\Emvdatabasemonitoring\PullDataEmvDatabaseMonitoringById;
use App\Services\Api\V1\Staff\Emvdatabasemonitoring\GetEmvDatabaseMonitoringByHhId;
use App\Services\Api\V1\Staff\Emvdatabasemonitoring\CountEmvDatabaseMonitoringById;
use App\Http\Resources\Api\V1\Staff\Emvdatabasemonitoring\EmvdatabasemonitoringResource;
use App\Services\Api\V1\Staff\Emvdatabasemonitoring\UpdaterEmvDatabaseMonitoring;
use App\Http\Requests\Api\V1\Staff\Emvdatabasemonitoringdetails\SyncEmvDatabaseMonitoringDetailsRequest;
use App\Exceptions\NotFoundException;
use App\Http\Resources\Api\V1\Staff\Emvdatabasemonitoringdetails\EmvdatabasemonitoringdetailsResource;
use App\Models\Emvdatabase;
use App\Models\Emvdatabasemonitoringdetails;
use App\Services\Api\V1\Staff\Emvdatabasemonitoringdetails\SyncEmvDatabaseMonitoringDetails;
use Exception;
use Illuminate\Support\Facades\DB;

class EmvdatabasemonitoringdetailsController extends Controller
{

    public function __construct()
    {
        // $this->middleware('permission:apiemvdatabasemonitoring-view', ['only' => ['show']]);
    }

    public function sync(SyncEmvDatabaseMonitoringDetailsRequest $request, SyncEmvDatabaseMonitoringDetails $syncEmvDatabaseMonitoringDetails)
    // public function sync(SyncEmvDatabaseMonitoringDetailsRequest $request)
    {
        $response = $syncEmvDatabaseMonitoringDetails->execute($request);

        if(!$response){
            return response()->json([                
                'status' => __('messages.error'),
                'description' => __('messages.not_found'),
            ],404);
        }
        
        if(isset($response['custom_error']))
        {
            if($response['custom_error'] == 1){
                return response()->json([                
                    'status' => __('messages.error'),
                    'description' => "HouseholdID (" . $request->hh_id . ") couldn't be found on database." . " Please pull data from server",
                ],404);
            }

            if($response['custom_error'] == 2){
                return response()->json([                
                    'status' => __('messages.error'),
                    'description' => "HouseholdID (" . $request->hh_id . "), Multiple data found on server",
                ],404);
            }
        }

        // dd($response);

        return response()->json([                
            'status' => __('messages.success'),
            'description' => __('staff/notifications.emvdatabasemonitoringdetails_sync'),
            'data' => $response
        ],200);

        // return $response;
    }
}
