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
    public function execute($fields = null)
    {
        DB::beginTransaction();
        try {
            
            $emvmonitoring_checker = Emvmonitoring::where(['hh_id' => $fields->hh_id])->get();
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

            $emvmonitoring_update = Emvmonitoring::where(['hh_id' => $fields->hh_id])->first();
            $emvmonitoring_update->record_counter = $emvmonitoring_update->record_counter + 1;
            $emvmonitoring_update->validated_at = Carbon::now();
            $emvmonitoring_update->save();
            
            if($emvmonitoring_update){

                $emv_monitoring_details_data = [
                    'full_name' => $fields->full_name,
                    'hh_id' => $fields->hh_id,
                    'client_status' => $fields->client_status,
                    'address' => $fields->address,
                    'sex' => $fields->sex,
                    'hh_set_group' => $fields->hh_set_group,
                    'assigned_staff' => $fields->assigned_staff,
                    'minor_grantee' => $fields->minor_grantee,
                    'contact' => $fields->contact,
                    'current_grantee_card_release_date' => $fields->current_grantee_card_release_date,
                    'current_grantee_card_release_place' => $fields->current_grantee_card_release_place,
                    'current_grantee_card_release_by' => $fields->current_grantee_card_release_by,
                    'current_grantee_is_available' => $fields->current_grantee_is_available,
                    'current_grantee_reason' => $fields->current_grantee_reason,
                    'current_grantee_card_number' => $fields->current_grantee_card_number,
                    'other_card_number_1' => $fields->other_card_number_1,
                    'other_card_holder_name_1' => $fields->other_card_holder_name_1,
                    'other_card_number_2' => $fields->other_card_number_2,
                    'other_card_holder_name_2' => $fields->other_card_holder_name_2,
                    'other_card_number_3' => $fields->other_card_number_3,
                    'other_card_holder_name_3' => $fields->other_card_holder_name_3,
                    'other_card_is_available' => $fields->other_card_is_available,
                    'other_card_reason' => $fields->other_card_reason,
                    'nma_amount' => $fields->nma_amount,
                    'nma_date_claimed' => $fields->nma_date_claimed,
                    'nma_reason' => $fields->nma_reason,
                    'nma_remarks' => $fields->nma_remarks,
                    'pawn_name_of_lender' => $fields->pawn_name_of_lender,
                    'pawn_date' => $fields->pawn_date,
                    'pawn_retrieved_date' => $fields->pawn_retrieved_date,
                    'pawn_status' => $fields->pawn_status,
                    'pawn_reason' => $fields->pawn_reason,
                    'pawn_offense_history' => $fields->pawn_offense_history,
                    'pawn_offense_date' => $fields->pawn_offense_date,
                    'pawn_remarks' => $fields->pawn_remarks,
                    'pawn_intervention_staff' => $fields->pawn_intervention_staff,
                    'pawn_other_details' => $fields->pawn_other_details,
                    'accomplish_e_signature' => $fields->accomplish_e_signature,
                    'informant_e_signature' => $fields->informant_e_signature,
                    'attested_by_e_signature' => $fields->attested_by_e_signature,
                    'attested_by_full_name' => $fields->attested_by_full_name,
                    'other_card_number_series_1' => $fields->other_card_number_series_1,
                    'other_card_number_series_2' => $fields->other_card_number_series_2,
                    'other_card_number_series_3' => $fields->other_card_number_series_3,
                    'emv_database_monitoring_id' => $emvmonitoring_update->id,
                    'current_grantee_card_number_series' => $fields->current_grantee_card_number_series,
                    'user_id' => $fields->user_id,
                ];
                
                // $fields->emv_database_monitoring_id = $emvmonitoring_update->id;
                // $fields->user_id = 123;

                
                // dd($fields->emv_database_monitoring_id);
                
                $response = Emvdatabasemonitoringdetails::create($emv_monitoring_details_data);
                
                if($response){
                    DB::commit();
                    // dd($emv_monitoring_details_data);
                    return $emv_monitoring_details_data;
                }
            }
        } catch (Exception $ex) {
            DB::rollBack();
            print_r($ex->getMessage());
            throw new NotFoundException('Issue on getting the data. Contact admin for more info.', 404);
        }
    }
}