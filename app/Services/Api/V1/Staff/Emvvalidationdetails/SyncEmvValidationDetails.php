<?php

namespace App\Services\Api\V1\Staff\Emvvalidationdetails;

use App\Exceptions\NotFoundException;
use App\Models\Cardvalidationdetail;
use App\Models\Emvvalidationdetails;
use App\Models\Emvvalidations;
use App\Models\Granteevalidation;
use App\Models\Nmavalidations;
use App\Models\Othercardvalidation;
use App\Models\Pawningvalidationdetails;
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

                $input_emv_validation_details['id'] = $request->id;
                $input_emv_validation_details['hh_status'] = $request->hh_status;
                $input_emv_validation_details['contact_no'] = $request->contact_no;
                $input_emv_validation_details['assigned_staff'] = $request->assigned_staff;
                $input_emv_validation_details['representative_name'] = $request->representative_name;
                $input_emv_validation_details['grantee_validation_id'] = $request->grantee_validation_id;
                $input_emv_validation_details['contact_no_of'] = $request->contact_no_of;
                $input_emv_validation_details['is_grantee'] = $request->is_grantee;
                $input_emv_validation_details['is_minor'] = $request->is_minor;
                $input_emv_validation_details['relationship_to_grantee'] = $request->relationship_to_grantee;
                $input_emv_validation_details['user_id'] = $request->user_id;
                $input_emv_validation_details['nma_validation_id'] = $request->nma_validation_id;
                $input_emv_validation_details['pawning_validation_detail_id'] = $request->pawning_validation_detail_id;
                $input_emv_validation_details['card_validation_detail_id'] = $request->card_validation_detail_id;
                $input_emv_validation_details['emv_validation_id'] = $request->emv_validation_id;
                $input_emv_validation_details['sync_at'] = $request->sync_at;
                $input_emv_validation_details['created_at'] = $request->created_at;
                // $input_emv_validation_details['updated_at'] = $request->updated_at;

                $input_nma_validations['id'] = $request->id;
                $input_nma_validations['amount'] = $request->amount;
                $input_nma_validations['date_claimed'] = $request->date_claimed;
                $input_nma_validations['reason'] = $request->reason;
                $input_nma_validations['remarks'] = $request->remarks;
                $input_nma_validations['created_at'] = $request->created_at;
                // $input_nma_validations['updated_at'] = $request->updated_at;

                $input_card_validation_details['id'] = $request->id;
                $input_card_validation_details['card_number_prefilled'] = $request->card_number_prefilled;
                $input_card_validation_details['card_number_system_generated'] = $request->card_number_system_generated;
                $input_card_validation_details['card_number_inputted'] = $request->card_number_inputted;
                $input_card_validation_details['card_number_series'] = $request->card_number_series;
                $input_card_validation_details['distribution_status'] = $request->distribution_status;
                $input_card_validation_details['release_date'] = $request->release_date;
                $input_card_validation_details['release_by'] = $request->release_by;
                $input_card_validation_details['release_place'] = $request->release_place;
                $input_card_validation_details['card_physically_presented'] = $request->card_physically_presented;
                $input_card_validation_details['card_pin_is_attached'] = $request->card_pin_is_attached;
                $input_card_validation_details['reason_not_presented'] = $request->reason_not_presented;
                $input_card_validation_details['reason_unclaimed'] = $request->reason_unclaimed;
                $input_card_validation_details['card_replacement_request'] = $request->card_replacement_request;
                $input_card_validation_details['card_replacement_submitted_details'] = $request->card_replacement_submitted_details;
                $input_card_validation_details['created_at'] = $request->created_at;
                // $input_card_validation_details['updated_at'] = $request->updated_at;


                
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
                $input_other_card_validations['emv_validation_detail_id'] = $request->emv_validation_detail_id;
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
                
                $validator = Validator::make($request->all(), [
                    'first_name' => 'required',
                    'last_name' => 'required',
                    'last_name' => 'required',
                    'hh_status' => 'required',
                    'province' => 'required',
                    'municipality' => 'required',
                    'barangay' => 'required',
                    'sex' => 'required',
                    'hh_id' => 'required',
                    'user_id' => 'required',
                    'nma_validation_id' => 'required',
                    'pawning_validation_detail_id' => 'required',
                    'card_validation_detail_id' => 'required',
                    'emv_validation_id' => 'required',
                    'sync_at' => 'required',

                ]);

                if($validator->fails()){
                    $response = ([
                        'custom_error' => 3,
                        'error_message' => $validator->errors()->messages()
                    ]);
                    return $response;
                }
                
                $response_nv = Nmavalidations::create($input_nma_validations);
                $reponse_cvd = Cardvalidationdetail::create($input_card_validation_details);
                $response_gv = Granteevalidation::create($input_grantee_validations);
                $response_pvd = Pawningvalidationdetails::create($input_pawning_validation_details);
                $response_ocv = Othercardvalidation::create($input_other_card_validations);
                $response_evd = Emvvalidationdetails::create($input_emv_validation_details);

                $tables = array();

                $tables['nma_validations'] = $response_nv;
                $tables['card_validation_details'] = $reponse_cvd;
                $tables['grantee_validations'] = $response_gv;
                $tables['pawning_validation_details'] = $response_pvd;
                $tables['other_card_validations'] = $response_ocv;
                $tables['emv_validation_details'] = $response_evd;
                
                if($tables){
                    DB::commit();
                    return $tables;
                }
            }
        } catch (Exception $ex) {
            DB::rollBack();
            print_r($ex->getMessage());
            throw new NotFoundException('Issue on getting the data. Contact admin for more info.', 404);
        }
    }
}