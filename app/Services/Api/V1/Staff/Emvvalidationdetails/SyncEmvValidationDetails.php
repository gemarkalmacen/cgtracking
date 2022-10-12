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
            
            $emvmonitoring_checker = Emvvalidations::where(['hh_id' => $request->gv_hh_id])->get();
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
            
            $emvmonitoring_update = Emvvalidations::where(['hh_id' => $request->gv_hh_id])->first();
            $emvmonitoring_update->record_counter = $emvmonitoring_update->record_counter + 1;
            $emvmonitoring_update->validated_at = $request->created_at;
            $emvmonitoring_update->save();
            
            if($emvmonitoring_update){
                $input_emv_validation_details = [
                    'hh_status' => $request->evd_hh_status,
                    'contact_no' => $request->evd_contact_no,
                    'contact_no_of' => $request->evd_contact_no_of,
                    'assigned_staff' => $request->evd_assigned_staff,
                    'representative_name' => $request->evd_representative_name,
                    'grantee_validation_id' => $request->evd_grantee_validation_id,
                    'is_grantee' => $request->evd_is_grantee,
                    'is_minor' => $request->evd_is_minor,
                    'relationship_to_grantee' => $request->evd_relationship_to_grantee,
                    'overall_remarks' => $request->evd_overall_remarks,
                    'user_id' => $request->evd_user_id,
                    // 'nma_validation_id' => $request->nma_validation_id,
                    // 'pawning_validation_detail_id' => $request->pawning_validation_detail_id,
                    // 'card_validation_detail_id' => $request->card_validation_detail_id,
                    // 'emv_validation_id' => $request->emv_validation_id,
                    // 'sync_at' => $request->sync_at,
                    'created_at' => $request->evd_created_at,
                ];

                $input_nma_validations = [
                    'amount' => $request->nv_amount,
                    'date_claimed' => $request->nv_date_claimed,
                    'reason' => $request->nv_reason,
                    'remarks' => $request->nv_remarks,
                    'created_at' => $request->evd_created_at,
                ];

                $input_card_validation_details = [
                    'card_number_prefilled' => $request->cvd_card_number_prefilled,
                    'card_number_system_generated' => $request->cvd_card_number_system_generated,
                    'card_number_inputted' => $request->cvd_card_number_inputted,
                    'card_number_series' => $request->cvd_card_number_series,
                    'distribution_status' => $request->cvd_distribution_status,
                    'release_date' => $request->cvd_release_date,
                    'release_by' => $request->cvd_release_by,
                    'release_place' => $request->cvd_release_place,
                    'card_physically_presented' => $request->cvd_card_physically_presented,
                    'card_pin_is_attached' => $request->cvd_card_pin_is_attached,
                    'reason_not_presented' => $request->cvd_reason_not_presented,
                    'reason_unclaimed' => $request->cvd_reason_unclaimed,
                    'card_replacement_request' => $request->cvd_card_replacement_request,
                    'card_replacement_submitted_details' => $request->cvd_card_replacement_submitted_details,
                    'created_at' => $request->evd_created_at,
                ];

                $input_other_card_validations = [
                    'card_holder_name' => $request->ocv_card_holder_name,
                    'card_number_system_generated' => $request->ocv_card_number_system_generated,
                    'card_number_inputted' => $request->ocv_card_number_inputted,
                    'card_number_series' => $request->ocv_card_number_series,
                    'distribution_status' => $request->ocv_distribution_status,
                    'release_date' => $request->ocv_release_date,
                    'release_by' => $request->ocv_release_by,
                    'release_place' => $request->ocv_release_place,
                    'card_physically_presented' => $request->ocv_card_physically_presented,
                    'card_pin_is_attached' => $request->ocv_card_pin_is_attached,
                    'reason_not_presented' => $request->ocv_reason_not_presented,
                    'reason_unclaimed' => $request->ocv_reason_unclaimed,
                    'card_replacement_request' => $request->ocv_card_replacement_request,
                    'card_replacement_submitted_details' => $request->ocv_card_replacement_submitted_details,
                    'pawning_remarks' => $request->ocv_pawning_remarks,
                    // 'emv_validation_detail_id' => $request->emv_validation_detail_id,
                    'created_at' => $request->evd_created_at,
                ];

                $input_grantee_validations = [
                    'hh_id' => $request->gv_hh_id,
                    'first_name' => $request->gv_first_name,
                    'last_name' => $request->gv_last_name,
                    'middle_name' => $request->gv_middle_name,
                    'ext_name' => $request->gv_ext_name,
                    'sex' => $request->gv_sex,
                    'province_code' => $request->gv_province_code,
                    'municipality_code' => $request->gv_municipality_code,
                    'barangay_code' => $request->gv_barangay_code,
                    'set' => $request->gv_set,
                    'created_at' => $request->gv_evd_created_at,
                ];

                $input_pawning_validation_details = [
                    'lender_name' => $request->lender_name,
                    'lender_address' => $request->lender_address,
                    'date_pawned' => $request->date_pawned,
                    'date_retrieved' => $request->date_retrieved,
                    'loan_amount' => $request->loan_amount,
                    'status' => $request->status,
                    'reason' => $request->reason,
                    'interest' => $request->interest,
                    'offense_history' => $request->offense_history,
                    'offense_date' => $request->offense_date,
                    'remarks' => $request->remarks,
                    'staff_intervention' => $request->staff_intervention,
                    'other_details' => $request->other_details,
                    'created_at' => $request->created_at,
                ];

                // saving file
                if($request->hasFile('image'))
                {
                    $detination_path = 'public/images/validations';
                    $image = $request->file('image');
                    $current_timestamp = Carbon::now()->toDateTimeString();
                    $current_timestamp = str_replace("-", "", $current_timestamp);
                    $current_timestamp = str_replace(" ", "", $current_timestamp);
                    $current_timestamp = str_replace(":", "", $current_timestamp);
                    $image_name = $current_timestamp."-gv-image-".$request->gv_hh_id;

                    // $gv_image_name = $current_timestamp."-gv-image-".$request->gv_hh_id;
                    // $gv_additional_image = $current_timestamp."-gv-image-".$request->gv_hh_id;

                    dd($image_name);

                    $path = $request->file('image')->storeAs($detination_path, $image_name);
                    $input_emv_validation_details['image'] = $image_name;
                }
                
                
                
                $validator = Validator::make($request->all(), [
                    'first_name' => 'required',
                    'last_name' => 'required',
                    'hh_status' => 'required',
                    'province' => 'required',
                    'municipality' => 'required',
                    'barangay' => 'required',
                    'sex' => 'required',
                    'gv_hh_id' => 'required',
                    'user_id' => 'required',
                    // 'nma_validation_id' => 'required',
                    // 'pawning_validation_detail_id' => 'required',
                    // 'card_validation_detail_id' => 'required',
                    // 'emv_validation_id' => 'required',
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