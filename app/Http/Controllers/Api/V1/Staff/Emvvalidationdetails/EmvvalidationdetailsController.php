<?php

namespace App\Http\Controllers\Api\V1\Staff\Emvvalidationdetails;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Api\V1\Staff\Emvvalidations\PullDataEmvValidationById;
use App\Services\Api\V1\Staff\Emvdatabasemonitoring\GetEmvDatabaseMonitoringByHhId;
use App\Services\Api\V1\Staff\Emvdatabasemonitoring\UpdaterEmvValidation;
use App\Exceptions\NotFoundException;
use App\Http\Requests\Api\V1\Staff\Emvvalidationdetails\SyncEmvValidationDetailsRequest;
use App\Http\Resources\Api\V1\Staff\Emvvalidationdetails\EmvdatabasemonitoringdetailsResource;
use App\Models\Emvdatabase;
use App\Models\Emvvalidationdetails;
use App\Services\Api\V1\Staff\Emvvalidationdetails\SyncEmvValidationDetails;
use Exception;
use Illuminate\Support\Facades\DB;

class EmvvalidationdetailsController extends Controller
{

    public function __construct()
    {
        // $this->middleware('permission:apiemvdatabasemonitoring-view', ['only' => ['show']]);
    }

    public function sync(SyncEmvValidationDetailsRequest $request, SyncEmvValidationDetails $SyncEmvValidationDetails)
    {
        $response = $SyncEmvValidationDetails->execute($request);

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

            if($response['custom_error'] == 3){
                return response()->json([                
                    'status' => __('messages.error'),
                    'description' => $response['error_message'],
                ],404);
            }
        }

        return response()->json([                
            'status' => __('messages.success'),
            'description' => __('staff/notifications.emvdatabasemonitoringdetails_sync'),
            'data' => $response
        ],200);
    }
}
