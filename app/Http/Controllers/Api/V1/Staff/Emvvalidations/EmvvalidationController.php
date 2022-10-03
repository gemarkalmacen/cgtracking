<?php

namespace App\Http\Controllers\Api\V1\Staff\Emvvalidations;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Api\V1\Staff\Emvvalidations\PullDataEmvValidationById;
use App\Services\Api\V1\Staff\Emvdatabasemonitoring\GetEmvDatabaseMonitoringByHhId;
use App\Services\Api\V1\Staff\Emvvalidations\CountEmvValidationById;
use App\Http\Resources\Api\V1\Staff\Emvvalidations\EmvvalidationResource;
use App\Services\Api\V1\Staff\Emvdatabasemonitoring\UpdaterEmvDatabaseMonitoring;

class EmvvalidationController extends Controller
{

    public function __construct()
    {
        $this->middleware('permission:apiemvvalidations-view', ['only' => ['show']]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, GetEmvDatabaseMonitoringByHhId $getEmvDatabaseMonitoringByHhId)
    {
        $response = $getEmvDatabaseMonitoringByHhId->execute($id);
        if(!$response){
            return response()->json([                
                'status' => __('messages.error'),
                'description' => __('messages.not_found'),
            ],404);
        }
        
        return response()->json([                
            'status' => __('messages.success'),
            'description' => __('messages.ok'),
            'data' =>   [
                'id' => $response->id,
                'full_name' => $response->full_name,           
                'hh_id' => $response->hh_id,
                'client_status' => $response->client_status,
                'address' => $response->address,
                'sex' => $response->sex,
                'hh_set_group' => $response->hh_set_group,
                'current_grantee_card_number' => $response->current_grantee_card_number,
                'other_card_number_1' => $response->other_card_number_1,
                'other_card_holder_name_1' => $response->other_card_holder_name_1,
                'other_card_number_2' => $response->other_card_number_2,
                'other_card_holder_name_2' => $response->other_card_holder_name_2,
                'other_card_number_3' => $response->other_card_number_3,
                'other_card_holder_name_3' => $response->other_card_holder_name_3,
                'upload_history_id' => $response->upload_history_id,
                'is_updated' => $response->is_updated,
                'created_at' => !empty($response->created_at) ? $response->created_at->format('Y-m-d H:i:s') : NULL,
                'updated_at' => !empty($response->updated_at) ? $response->updated_at->format('Y-m-d H:i:s') : NULL,
            ]
        ],200);
    }

    public function pulldata($id, PullDataEmvValidationById $pullDataEmvValidationById, CountEmvValidationById $countEmvValidationById)
    {
        $response = $pullDataEmvValidationById->execute($id);
        $counter_response = $countEmvValidationById->execute($id);

        if(!$response){
            return response()->json([                
                'status' => __('messages.error'),
                'description' => __('messages.not_found'),
            ],404);
        }
        
        return response()->json([                
            'status' => __('messages.success'),
            'total_data_count' => $counter_response,
            'description' => __('messages.ok'),
            'data' => EmvvalidationResource::collection($response)
        ],200);
    }

    public function updater(UpdaterEmvDatabaseMonitoring $updaterEmvDatabaseMonitoring){
        $response = $updaterEmvDatabaseMonitoring->execute();
        if(!$response){
            return response()->json([                
                'status' => __('messages.error'),
                'description' => __('messages.not_found'),
            ],404);
        }
        
        return response()->json([                
            'status' => __('messages.success'),
            'description' => __('messages.ok'),
            'data' => EmvvalidationResource::collection($response)
        ],200);
    }

}
