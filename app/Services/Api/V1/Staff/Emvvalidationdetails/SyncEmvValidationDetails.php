<?php

namespace App\Services\Api\V1\Staff\Emvvalidationdetails;

use App\Exceptions\NotFoundException;
use App\Models\Emvvalidationdetails;
use App\Models\Emvvalidations;
use App\Models\Nmavalidations;
use Spatie\QueryBuilder\QueryBuilder;
use Exception;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class SyncEmvValidationDetails
{
    public function execute($request = null)
    {
        DB::beginTransaction();
        try {
            
            $emvmonitoring_checker = Emvvalidations::where(['hh_id' => $request->hh_id])->get();
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
            
            $emvmonitoring_update = Emvvalidations::where(['hh_id' => $request->hh_id])->first();
            $emvmonitoring_update->record_counter = $emvmonitoring_update->record_counter + 1;
            $emvmonitoring_update->validated_at = $request->created_at;
            $emvmonitoring_update->save();
            
            if($emvmonitoring_update){

                $input_emv_validation_details = $request->all();
                $input_nma_validations = $request->all();
                $input_card_validation_details = $request->all();
                $input_other_card_validations = $request->all();
                $input_grantee_validations = $request->all();
                $input_pawning_validation_details = $request->all();

                $input_emv_validation_details['hh_status'] = $request->hh_status;
                $input_emv_validation_details['contact_no'] = $request->contact_no;
                $input_emv_validation_details['assigned_staff'] = $request->assigned_staff;
                $input_emv_validation_details['representative_name'] = $request->representative_name;
                $input_emv_validation_details['grantee_id'] = $request->grantee_id;
                $input_emv_validation_details['is_grantee'] = $request->is_grantee;
                $input_emv_validation_details['is_minor'] = $request->is_minor;
                $input_emv_validation_details['relationship_to_grantee'] = $request->relationship_to_grantee;
                $input_emv_validation_details['user_id'] = $request->user_id;
                $input_emv_validation_details['contact_no_of'] = $request->contact_no_of;
                $input_emv_validation_details['pawning_validation_detail_id'] = $request->pawning_validation_detail_id;
                $input_emv_validation_details['nma_validation_id'] = $request->nma_validation_id;
                $input_emv_validation_details['created_at'] = $request->created_at;
                // $input_emv_validation_details['updated_at'] = $request->updated_at; //

                $input_nma_validations['id'] = $request->id;
                $input_nma_validations['amount'] = $request->amount;
                $input_nma_validations['date_claimed'] = $request->date_claimed;
                $input_nma_validations['reason'] = $request->reason;
                $input_nma_validations['remarks'] = $request->remarks;
                $input_nma_validations['created_at'] = $request->created_at;
                // $input_nma_validations['updated_at'] = $request->updated_at;                

                $input_card_validation_details['id'] = $request->id;
                $input_card_validation_details['hh_status'] = $request->hh_status;
                $input_card_validation_details['contact_no'] = $request->contact_no;
                $input_card_validation_details['assigned_staff'] = $request->assigned_staff;
                $input_card_validation_details['representative_name'] = $request->representative_name;
                $input_card_validation_details['grantee_id'] = $request->grantee_id;
                $input_card_validation_details['is_grantee'] = $request->is_grantee;
                $input_card_validation_details['is_minor'] = $request->is_minor;
                $input_card_validation_details['relationship_to_grantee'] = $request->relationship_to_grantee;
                $input_card_validation_details['user_id'] = $request->user_id;
                $input_card_validation_details['sync_at'] = $request->sync_at;
                $input_card_validation_details['created_at'] = $request->created_at;
                // $input_card_validation_details['updated_at'] = $request->updated_at;
                $input_card_validation_details['contact_no_of'] = $request->contact_no_of;
                $input_card_validation_details['pawning_validation_detail_id'] = $request->pawning_validation_detail_id;
                $input_card_validation_details['nma_validation_id'] = $request->nma_validation_id;

                
                $input_other_card_validations['id'] = $request->id;
                $input_other_card_validations['card_holder_name'] = $request->card_holder_name;
                $input_other_card_validations['card_number_system_generated'] = $request->card_number_system_generated;
                $input_other_card_validations['card_number_inputted'] = $request->card_number_inputted;
                $input_other_card_validations['card_number_series'] = $request->card_number_series;
                $input_other_card_validations['distribution_status'] = $request->distribution_status;
                $input_other_card_validations['release_date'] = $request->release_date;
                $input_other_card_validations['release_by'] = $request->release_by;
                $input_other_card_validations['release_place'] = $request->release_place;
                $input_other_card_validations['card_physically_presented'] = $request->card_physically_presented;
                $input_other_card_validations['card_pin_is_attached'] = $request->card_pin_is_attached;
                $input_other_card_validations['reason_not_presented'] = $request->reason_not_presented;
                $input_other_card_validations['reason_unclaimed'] = $request->reason_unclaimed;
                $input_other_card_validations['card_replacement_request'] = $request->card_replacement_request;
                $input_other_card_validations['card_replacement_submitted_details'] = $request->card_replacement_submitted_details;
                $input_other_card_validations['pawning_remarks'] = $request->pawning_remarks;
                $input_other_card_validations['emv_monitoring_id'] = $request->emv_monitoring_id;
                $input_other_card_validations['created_at'] = $request->created_at;
                // $input_other_card_validations['updated_at'] = $request->updated_at;
                

                $input_grantee_validations['id'] = $request->id;
                $input_grantee_validations['hh_id'] = $request->hh_id;
                $input_grantee_validations['first_name'] = $request->first_name;
                $input_grantee_validations['last_name'] = $request->last_name;
                $input_grantee_validations['middle_name'] = $request->middle_name;
                $input_grantee_validations['ext_name'] = $request->ext_name;
                $input_grantee_validations['sex'] = $request->sex;
                $input_grantee_validations['province_code'] = $request->province_code;
                $input_grantee_validations['municipality_code'] = $request->municipality_code;
                $input_grantee_validations['barangay_code'] = $request->barangay_code;
                $input_grantee_validations['set'] = $request->set;
                $input_grantee_validations['created_at'] = $request->created_at;
                // $input_grantee_validations['updated_at'] = $request->updated_at;

                
                $input_pawning_validation_details['id'] = $request->id;
                $input_pawning_validation_details['lender_name'] = $request->lender_name;
                $input_pawning_validation_details['lender_address'] = $request->lender_address;
                $input_pawning_validation_details['date_pawned'] = $request->date_pawned;
                $input_pawning_validation_details['date_retrieved'] = $request->date_retrieved;
                $input_pawning_validation_details['loan_amount'] = $request->loan_amount;
                $input_pawning_validation_details['status'] = $request->status;
                $input_pawning_validation_details['reason'] = $request->reason;
                $input_pawning_validation_details['interest'] = $request->interest;
                $input_pawning_validation_details['offense_history'] = $request->offense_history;
                $input_pawning_validation_details['offense_date'] = $request->offense_date;
                $input_pawning_validation_details['remarks'] = $request->remarks;
                $input_pawning_validation_details['staff_intervention'] = $request->staff_intervention;
                $input_pawning_validation_details['other_details'] = $request->other_details;
                $input_pawning_validation_details['created_at'] = $request->created_at;
                // $input_pawning_validation_details['updated_at'] = $request->updated_at;
                


                // dd($input);

                // $input['full_name'] = $request->full_name;
                // $input['hh_id'] = $request->hh_id;
                // $input['client_status'] = $request->client_status;
                // $input['address'] = $request->address;
                // $input['sex'] = $request->sex;
                // $input['hh_set_group'] = $request->hh_set_group;
                // $input['assigned_staff'] = $request->assigned_staff;
                // $input['minor_grantee'] = $request->minor_grantee;
                // $input['contact'] = $request->contact;
                // $input['current_grantee_card_release_date'] = $request->current_grantee_card_release_date;
                // $input['current_grantee_card_release_place'] = $request->current_grantee_card_release_place;
                // $input['current_grantee_card_release_by'] = $request->current_grantee_card_release_by;
                // $input['current_grantee_is_available'] = $request->current_grantee_is_available;
                // $input['current_grantee_reason'] = $request->current_grantee_reason;
                // $input['current_grantee_card_number'] = $request->current_grantee_card_number;
                // $input['other_card_number_1'] = $request->other_card_number_1;
                // $input['other_card_holder_name_1'] = $request->other_card_holder_name_1;
                // $input['other_card_number_2'] = $request->other_card_number_2;
                // $input['other_card_holder_name_2'] = $request->other_card_holder_name_2;
                // $input['other_card_number_3'] = $request->other_card_number_3;
                // $input['other_card_holder_name_3'] = $request->other_card_holder_name_3;
                // $input['other_card_is_available'] = $request->other_card_is_available;
                // $input['other_card_is_available_2'] = $request->other_card_is_available_2;
                // $input['other_card_is_available_3'] = $request->other_card_is_available_3;
                // $input['other_card_reason'] = $request->other_card_reason;
                // $input['other_card_reason_2'] = $request->other_card_reason_2;
                // $input['other_card_reason_3'] = $request->other_card_reason_3;
                // $input['nma_amount'] = $request->nma_amount;
                // $input['nma_date_claimed'] = $request->nma_date_claimed;
                // $input['nma_reason'] = $request->nma_reason;
                // $input['nma_remarks'] = $request->nma_remarks;
                // $input['pawn_name_of_lender'] = $request->pawn_name_of_lender;
                // $input['pawn_lender_address'] = $request->pawn_lender_address;
                // $input['pawn_date'] = $request->pawn_date;
                // $input['pawn_retrieved_date'] = $request->pawn_retrieved_date;
                // $input['pawn_loaned_amount'] = $request->pawn_loaned_amount;
                // $input['pawn_interest'] = $request->pawn_interest;
                // $input['pawn_status'] = $request->pawn_status;
                // $input['pawn_reason'] = $request->pawn_reason;
                // $input['pawn_offense_history'] = $request->pawn_offense_history;
                // $input['pawn_offense_date'] = $request->pawn_offense_date;
                // $input['pawn_remarks'] = $request->pawn_remarks;
                // $input['pawn_intervention_staff'] = $request->pawn_intervention_staff;
                // $input['pawn_other_details'] = $request->pawn_other_details;
                // $input['informant_full_name'] = $request->informant_full_name;
                // $input['accomplish_by_full_name'] = $request->accomplish_by_full_name;
                // $input['accomplish_e_signature'] = $request->accomplish_e_signature;
                // $input['informant_e_signature'] = $request->informant_e_signature;
                // $input['attested_by_e_signature'] = $request->attested_by_e_signature;
                // $input['current_cash_card_picture'] = $request->current_cash_card_picture;
                // $input['beneficiary_picture'] = $request->beneficiary_picture;
                // $input['attested_by_full_name'] = $request->attested_by_full_name;
                // $input['other_card_number_series_1'] = $request->other_card_number_series_1;
                // $input['other_card_number_series_2'] = $request->other_card_number_series_2;
                // $input['other_card_number_series_3'] = $request->other_card_number_series_3;
                // $input['emv_database_monitoring_id'] = $emvmonitoring_update->id;
                // $input['current_grantee_card_number_series'] = $request->current_grantee_card_number_series;
                // $input['user_id'] = $request->user_id;
                // $input['created_at'] = $request->created_at;
                
                $validator = Validator::make($request->all(), [
                    'first_name' => 'required',
                    'last_name' => 'required',
                    'last_name' => 'required',
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
                
                // $response = Emvvalidationdetails::create($input);

                $response_evd = Emvvalidationdetails::create($input_emv_validation_details);
                $response_nv = Nmavalidations::create($input_nma_validations);
                // input_card_validation_details
                // input_other_card_validations
                // input_grantee_validations
                // input_pawning_validation_details

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