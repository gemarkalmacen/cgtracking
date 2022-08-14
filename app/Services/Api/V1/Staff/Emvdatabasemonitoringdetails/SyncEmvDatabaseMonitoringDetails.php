<?php

namespace App\Services\Api\V1\Staff\Emvdatabasemonitoringdetails;

use App\Exceptions\NotFoundException;
use App\Models\Emvdatabasemonitoringdetails;
use App\Models\Emvmonitoring;
use Spatie\QueryBuilder\QueryBuilder;
use Exception;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class SyncEmvDatabaseMonitoringDetails
{
    /**
     * Get the City by id
     */
    public function execute($request = null)
    {
        DB::beginTransaction();
        try {
            
            $emvmonitoring_checker = Emvmonitoring::where(['hh_id' => $request->hh_id])->get();
            if( count($emvmonitoring_checker) == 0 ){
                $response = ([
                    'custom_error' => 1
                ]);
                return $response;
            }
            
            if( count($emvmonitoring_checker) > 1 ){
                $response = ([
                    'custom_error' => 2
                ]);
                return $response;
            }
            
            $emvmonitoring_update = Emvmonitoring::where(['hh_id' => $request->hh_id])->first();
            $emvmonitoring_update->record_counter = $emvmonitoring_update->record_counter + 1;
            $emvmonitoring_update->validated_at = $request->created_at;
            $emvmonitoring_update->save();
            
            if($emvmonitoring_update){
                $input = $request->all();
                $input['full_name'] = $request->full_name;
                $input['hh_id'] = $request->hh_id;
                $input['client_status'] = $request->client_status;
                $input['address'] = $request->address;
                $input['sex'] = $request->sex;
                $input['hh_set_group'] = $request->hh_set_group;
                $input['assigned_staff'] = $request->assigned_staff;
                $input['minor_grantee'] = $request->minor_grantee;
                $input['contact'] = $request->contact;
                $input['current_grantee_card_release_date'] = $request->current_grantee_card_release_date;
                $input['current_grantee_card_release_place'] = $request->current_grantee_card_release_place;
                $input['current_grantee_card_release_by'] = $request->current_grantee_card_release_by;
                $input['current_grantee_is_available'] = $request->current_grantee_is_available;
                $input['current_grantee_reason'] = $request->current_grantee_reason;
                $input['current_grantee_card_number'] = $request->current_grantee_card_number;
                $input['other_card_number_1'] = $request->other_card_number_1;
                $input['other_card_holder_name_1'] = $request->other_card_holder_name_1;
                $input['other_card_number_2'] = $request->other_card_number_2;
                $input['other_card_holder_name_2'] = $request->other_card_holder_name_2;
                $input['other_card_number_3'] = $request->other_card_number_3;
                $input['other_card_holder_name_3'] = $request->other_card_holder_name_3;
                $input['other_card_is_available'] = $request->other_card_is_available;
                $input['other_card_reason'] = $request->other_card_reason;
                $input['nma_amount'] = $request->nma_amount;
                $input['nma_date_claimed'] = $request->nma_date_claimed;
                $input['nma_reason'] = $request->nma_reason;
                $input['nma_remarks'] = $request->nma_remarks;
                $input['pawn_name_of_lender'] = $request->pawn_name_of_lender;
                $input['pawn_date'] = $request->pawn_date;
                $input['pawn_retrieved_date'] = $request->pawn_retrieved_date;
                $input['pawn_status'] = $request->pawn_status;
                $input['pawn_reason'] = $request->pawn_reason;
                $input['pawn_offense_history'] = $request->pawn_offense_history;
                $input['pawn_offense_date'] = $request->pawn_offense_date;
                $input['pawn_remarks'] = $request->pawn_remarks;
                $input['pawn_intervention_staff'] = $request->pawn_intervention_staff;
                $input['pawn_other_details'] = $request->pawn_other_details;
                $input['informant_full_name'] = $request->informant_full_name;
                $input['accomplish_by_full_name'] = $request->accomplish_by_full_name;
                $input['accomplish_e_signature'] = $request->accomplish_e_signature;
                $input['informant_e_signature'] = $request->informant_e_signature;
                $input['attested_by_e_signature'] = $request->attested_by_e_signature;
                $input['current_cash_card_picture'] = $request->current_cash_card_picture;
                $input['beneficiary_picture'] = $request->beneficiary_picture;
                $input['attested_by_full_name'] = $request->attested_by_full_name;
                $input['other_card_number_series_1'] = $request->other_card_number_series_1;
                $input['other_card_number_series_2'] = $request->other_card_number_series_2;
                $input['other_card_number_series_3'] = $request->other_card_number_series_3;
                $input['emv_database_monitoring_id'] = $emvmonitoring_update->id;
                $input['current_grantee_card_number_series'] = $request->current_grantee_card_number_series;
                $input['user_id'] = $request->user_id;
                $input['created_at'] = $request->created_at;
                
                $validator = Validator::make($request->all(), [
                    'full_name' => 'required',
                    'client_status' => 'required',
                    'address' => 'required',
                    'sex' => 'required',
                    'hh_id' => 'required',
                ]);

                if($validator->fails()){
                    $response = ([
                        'custom_error' => 3,
                        'error_message' => $validator->errors()->messages()
                    ]);
                    return $response;
                }
                
                $response = Emvdatabasemonitoringdetails::create($input);
                if($response){
                    DB::commit();
                    return $input;
                }
            }
        } catch (Exception $ex) {
            DB::rollBack();
            print_r($ex->getMessage());
            throw new NotFoundException('Issue on getting the data. Contact admin for more info.', 404);
        }
    }
}