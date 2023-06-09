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
use Illuminate\Support\Facades\Storage;

class SyncEmvValidationDetails
{
    public function execute($request = null)
    {
        DB::beginTransaction();
        try {
            
            $emvmonitoring_checker = Emvvalidations::where(['id' => $request->evd_id])->get();
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
            
            $emvvalidations_update = Emvvalidations::where(['id' => $request->evd_id])->first();
            $emvvalidations_update->record_counter = $emvvalidations_update->record_counter + 1;
            $emvvalidations_update->validated_at = $request->evd_created_at;
            $emvvalidations_update->save();

            if($emvvalidations_update){

                $input_nma_validations = [
                    'amount' => $request->nv_amount,
                    'date_claimed' => $request->nv_date_claimed,
                    'reason' => urldecode($request->nv_nma_reason),
                    'remarks' => urldecode($request->nv_nma_remarks),
                    'created_at' => $request->evd_created_at,
                ];

                $input_card_validation_details = [
                    'card_number_prefilled' => $request->cvd_card_number_prefilled,
                    'card_number_system_generated' => $request->cvd_card_number_system_generated,
                    'card_number_inputted' => $request->cvd_card_number_inputted,
                    'card_number_series' => $request->cvd_card_number_series,
                    'distribution_status' => $request->cvd_distribution_status,
                    'release_date' => $request->cvd_release_date,
                    'release_by' => urldecode($request->cvd_release_by),
                    'release_place' => urldecode($request->cvd_release_place),
                    'card_physically_presented' => $request->cvd_card_physically_presented,
                    'card_pin_is_attached' => $request->cvd_card_pin_is_attached,
                    'reason_not_presented' => urldecode($request->cvd_reason_not_presented),
                    'reason_unclaimed' => urldecode($request->cvd_reason_unclaimed),
                    'card_replacement_request' => $request->cvd_card_replacement_request,
                    'card_replacement_submitted_details' => $request->cvd_card_replacement_submitted_details,
                    'created_at' => $request->evd_created_at,
                ];

                $input_grantee_validations = [
                    'hh_id' => $request->gv_hh_id,
                    'first_name' => urldecode($request->gv_first_name),
                    'last_name' => urldecode($request->gv_last_name),
                    'middle_name' => urldecode($request->gv_middle_name),
                    'ext_name' => urldecode($request->gv_ext_name),
                    'sex' => $request->gv_sex,
                    'province_code' => $request->gv_province_code,
                    'municipality_code' => $request->gv_municipality_code,
                    'barangay_code' => $request->gv_barangay_code,
                    'set' => $request->gv_set,
                    'created_at' => $request->evd_created_at,
                ];

                $input_pawning_validation_details = [
                    'lender_name' => urldecode($request->pvd_lender_name),
                    'lender_address' => urldecode($request->pvd_lender_address),
                    'date_pawned' => $request->pvd_date_pawned,
                    'date_retrieved' => $request->pvd_date_retrieved,
                    'loan_amount' => $request->pvd_loan_amount,
                    'status' => $request->pvd_status,
                    'reason' => urldecode($request->pvd_reason),
                    'interest' => $request->pvd_interest,
                    'offense_history' => $request->pvd_offense_history,
                    'offense_date' => $request->pvd_offense_date,
                    'remarks' => urldecode($request->pvd_remarks),
                    'staff_intervention' => urldecode($request->pvd_staff_intervention),
                    'other_details' => urldecode($request->pvd_other_details),
                    'created_at' => $request->evd_created_at,
                ];

                $input_emv_validation_details = [
                    'hh_status' => $request->evd_hh_status,
                    'contact_no' => $request->evd_contact_no,
                    'contact_no_of' => $request->evd_contact_no_of,
                    'assigned_staff' => urldecode($request->evd_assigned_staff),
                    'representative_name' => urldecode($request->evd_representative_name),
                    'grantee_validation_id' => $request->evd_grantee_validation_id,
                    'is_grantee' => $request->evd_is_grantee,
                    'is_minor' => $request->evd_is_minor,
                    'relationship_to_grantee' => urldecode($request->evd_relationship_to_grantee),
                    'overall_remarks' => urldecode($request->evd_overall_remarks),
                    'relationship_to_contact_no' => $request->evd_relationship_to_contact_no,
                    'created_at' => $request->evd_created_at,
                ];

                $detination_path = 'public/images/validations';
                $current_timestamp = Carbon::now()->toDateTimeString();
                $current_timestamp = str_replace("-", "", $current_timestamp);
                $current_timestamp = str_replace(" ", "", $current_timestamp);
                $current_timestamp = str_replace(":", "", $current_timestamp);

                if($request->card_number_inputted){

                }

                if($request->hasFile('gv_image'))
                {
                    $gv_image = $request->file('gv_image');
                    $file_extension = $gv_image->getClientOriginalExtension();
                    $gv_image_name = $current_timestamp."-gv-image-".$request->gv_hh_id.".".$file_extension;
                    Storage::putFileAs(
                        $detination_path, $request->file('gv_image'), $gv_image_name
                    );
                    $input_grantee_validations['image'] = $gv_image_name;
                }

                if($request->hasFile('gv_image_additional'))
                {
                    $file_extension = $gv_image->getClientOriginalExtension();
                    $gv_image_additional_name = $current_timestamp."-gv-image-additional-".$request->gv_hh_id.".".$file_extension;
                    Storage::putFileAs(
                        $detination_path, $request->file('gv_image_additional'), $gv_image_additional_name
                    );
                    $input_grantee_validations['image_additional'] = $gv_image_additional_name;
                }

                if($request->hasFile('cvd_card_image'))
                {
                    $file_extension = $gv_image->getClientOriginalExtension();
                    $cvd_card_image_name = $current_timestamp."-cvd-card-image-".$request->gv_hh_id.".".$file_extension;
                    Storage::putFileAs(
                        $detination_path, $request->file('cvd_card_image'), $cvd_card_image_name
                    );
                    $input_card_validation_details['card_image'] = $cvd_card_image_name;
                }
                
                $validator = Validator::make($request->all(), [
                    'gv_first_name' => 'required',
                    'gv_last_name' => 'required',
                    'evd_hh_status' => 'required',
                    'gv_province_code' => 'required',
                    'gv_municipality_code' => 'required',
                    'gv_barangay_code' => 'required',
                    'gv_sex' => 'required',
                    'gv_hh_id' => 'required',
                    'evd_user_id' => 'required',
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

                if($response_nv){
                    
                    $input_emv_validation_details['user_id'] = $request->evd_user_id;
                    $input_emv_validation_details['grantee_validation_id'] = $response_gv->id;
                    $input_emv_validation_details['nma_validation_id'] = $response_nv->id;
                    $input_emv_validation_details['pawning_validation_detail_id'] = $response_pvd->id;
                    $input_emv_validation_details['card_validation_detail_id'] = $reponse_cvd->id;
                    $input_emv_validation_details['emv_validation_id'] = $emvvalidations_update->id;
                    
                    $response_evd = Emvvalidationdetails::create($input_emv_validation_details);

                    if($response_evd){
                        $input_other_card_validations_1 = [
                            'card_holder_name' => urldecode($request->ocv_card_holder_name_1),
                            'card_number_system_generated' => $request->ocv_card_number_system_generated_1,
                            'card_number_inputted' => $request->ocv_card_number_inputted_1,
                            'card_number_series' => $request->ocv_card_number_series_1,
                            'distribution_status' => $request->ocv_distribution_status_1,
                            'release_date' => $request->ocv_release_date_1,
                            'release_by' => urldecode($request->ocv_release_by_1),
                            'release_place' => urldecode($request->ocv_release_place_1),
                            'card_physically_presented' => $request->ocv_card_physically_presented_1,
                            'card_pin_is_attached' => $request->ocv_card_pin_is_attached_1,
                            'reason_not_presented' => urldecode($request->ocv_reason_not_presented_1),
                            'reason_unclaimed' => urldecode($request->ocv_reason_unclaimed_1),
                            'card_replacement_request' => $request->ocv_card_replacement_request_1,
                            'card_replacement_submitted_details' => $request->ocv_card_replacement_submitted_details_1,
                            'pawning_remarks' => urldecode($request->ocv_pawning_remarks_1),
                            'emv_validation_detail_id' => $response_evd->id,
                            'created_at' => $request->evd_created_at,
                        ];

                        $input_other_card_validations_2 = [
                            'card_holder_name' => urldecode($request->ocv_card_holder_name_2),
                            'card_number_system_generated' => $request->ocv_card_number_system_generated_2,
                            'card_number_inputted' => $request->ocv_card_number_inputted_2,
                            'card_number_series' => $request->ocv_card_number_series_2,
                            'distribution_status' => $request->ocv_distribution_status_2,
                            'release_date' => $request->ocv_release_date_2,
                            'release_by' => urldecode($request->ocv_release_by_2),
                            'release_place' => urldecode($request->ocv_release_place_2),
                            'card_physically_presented' => $request->ocv_card_physically_presented_2,
                            'card_pin_is_attached' => $request->ocv_card_pin_is_attached_2,
                            'reason_not_presented' => urldecode($request->ocv_reason_not_presented_2),
                            'reason_unclaimed' => urldecode($request->ocv_reason_unclaimed_2),
                            'card_replacement_request' => $request->ocv_card_replacement_request_2,
                            'card_replacement_submitted_details' => $request->ocv_card_replacement_submitted_details_2,
                            'pawning_remarks' => urldecode($request->ocv_pawning_remarks_2),
                            'emv_validation_detail_id' => $response_evd->id,
                            'created_at' => $request->evd_created_at,
                        ];

                        $input_other_card_validations_3 = [
                            'card_holder_name' => urldecode($request->ocv_card_holder_name_3),
                            'card_number_system_generated' => $request->ocv_card_number_system_generated_3,
                            'card_number_inputted' => $request->ocv_card_number_inputted_3,
                            'card_number_series' => $request->ocv_card_number_series_3,
                            'distribution_status' => $request->ocv_distribution_status_3,
                            'release_date' => $request->ocv_release_date_3,
                            'release_by' => urldecode($request->ocv_release_by_3),
                            'release_place' => urldecode($request->ocv_release_place_3),
                            'card_physically_presented' => $request->ocv_card_physically_presented_3,
                            'card_pin_is_attached' => $request->ocv_card_pin_is_attached_3,
                            'reason_not_presented' => urldecode($request->ocv_reason_not_presented_3),
                            'reason_unclaimed' => urldecode($request->ocv_reason_unclaimed_3),
                            'card_replacement_request' => $request->ocv_card_replacement_request_3,
                            'card_replacement_submitted_details' => $request->ocv_card_replacement_submitted_details_3,
                            'pawning_remarks' => urldecode($request->ocv_pawning_remarks_3),
                            'emv_validation_detail_id' => $response_evd->id,
                            'created_at' => $request->evd_created_at,
                        ];

                        $input_other_card_validations_4 = [
                            'card_holder_name' => urldecode($request->ocv_card_holder_name_4),
                            'card_number_system_generated' => $request->ocv_card_number_system_generated_4,
                            'card_number_inputted' => $request->ocv_card_number_inputted_4,
                            'card_number_series' => $request->ocv_card_number_series_4,
                            'distribution_status' => $request->ocv_distribution_status_4,
                            'release_date' => $request->ocv_release_date_4,
                            'release_by' => urldecode($request->ocv_release_by_4),
                            'release_place' => urldecode($request->ocv_release_place_4),
                            'card_physically_presented' => $request->ocv_card_physically_presented_4,
                            'card_pin_is_attached' => $request->ocv_card_pin_is_attached_4,
                            'reason_not_presented' => urldecode($request->ocv_reason_not_presented_4),
                            'reason_unclaimed' => urldecode($request->ocv_reason_unclaimed_4),
                            'card_replacement_request' => $request->ocv_card_replacement_request_4,
                            'card_replacement_submitted_details' => $request->ocv_card_replacement_submitted_details_4,
                            'pawning_remarks' => urldecode($request->ocv_pawning_remarks_4),
                            'emv_validation_detail_id' => $response_evd->id,
                            'created_at' => $request->evd_created_at,
                        ];

                        $input_other_card_validations_5 = [
                            'card_holder_name' => urldecode($request->ocv_card_holder_name_5),
                            'card_number_system_generated' => $request->ocv_card_number_system_generated_5,
                            'card_number_inputted' => $request->ocv_card_number_inputted_5,
                            'card_number_series' => $request->ocv_card_number_series_5,
                            'distribution_status' => $request->ocv_distribution_status_5,
                            'release_date' => $request->ocv_release_date_5,
                            'release_by' => urldecode($request->ocv_release_by_5),
                            'release_place' => urldecode($request->ocv_release_place_5),
                            'card_physically_presented' => $request->ocv_card_physically_presented_5,
                            'card_pin_is_attached' => $request->ocv_card_pin_is_attached_5,
                            'reason_not_presented' => urldecode($request->ocv_reason_not_presented_5),
                            'reason_unclaimed' => urldecode($request->ocv_reason_unclaimed_5),
                            'card_replacement_request' => $request->ocv_card_replacement_request_5,
                            'card_replacement_submitted_details' => $request->ocv_card_replacement_submitted_details_5,
                            'pawning_remarks' => urldecode($request->ocv_pawning_remarks_5),
                            'emv_validation_detail_id' => $response_evd->id,
                            'created_at' => $request->evd_created_at,
                        ];

                        if($request->hasFile('ocv_card_image_1'))
                        {
                            $file_extension = $gv_image->getClientOriginalExtension();
                            $ocv_card_image_1_name = $current_timestamp."-ocv-card-image-1-".$request->gv_hh_id.".".$file_extension;
                            Storage::putFileAs(
                                $detination_path, $request->file('ocv_card_image_1'), $ocv_card_image_1_name
                            );
                            $input_other_card_validations_1['card_image'] = $ocv_card_image_1_name;
                        }

                        if($request->hasFile('ocv_card_image_2'))
                        {
                            $file_extension = $gv_image->getClientOriginalExtension();
                            $ocv_card_image_2_name = $current_timestamp."-ocv-card-image-2-".$request->gv_hh_id.".".$file_extension;
                            Storage::putFileAs(
                                $detination_path, $request->file('ocv_card_image_2'), $ocv_card_image_2_name
                            );
                            $input_other_card_validations_2['card_image'] = $ocv_card_image_2_name;
                        }

                        if($request->hasFile('ocv_card_image_3'))
                        {
                            $file_extension = $gv_image->getClientOriginalExtension();
                            $ocv_card_image_3_name = $current_timestamp."-ocv-card-image-3-".$request->gv_hh_id.".".$file_extension;
                            Storage::putFileAs(
                                $detination_path, $request->file('ocv_card_image_3'), $ocv_card_image_3_name
                            );
                            $input_other_card_validations_3['card_image'] = $ocv_card_image_3_name;
                        }

                        if($request->hasFile('ocv_card_image_4'))
                        {
                            $file_extension = $gv_image->getClientOriginalExtension();
                            $ocv_card_image_4_name = $current_timestamp."-ocv-card-image-4-".$request->gv_hh_id.".".$file_extension;
                            Storage::putFileAs(
                                $detination_path, $request->file('ocv_card_image_4'), $ocv_card_image_4_name
                            );
                            $input_other_card_validations_4['card_image'] = $ocv_card_image_4_name;
                        }

                        if($request->hasFile('ocv_card_image_5'))
                        {
                            $file_extension = $gv_image->getClientOriginalExtension();
                            $ocv_card_image_5_name = $current_timestamp."-ocv-card-image-5-".$request->gv_hh_id.".".$file_extension;
                            Storage::putFileAs(
                                $detination_path, $request->file('ocv_card_image_5'), $ocv_card_image_5_name
                            );
                            $input_other_card_validations_5['card_image'] = $ocv_card_image_5_name;
                        }
                    }
                }

                $response_ocv_1 = null;
                $response_ocv_2 = null;
                $response_ocv_3 = null;
                $response_ocv_4 = null;
                $response_ocv_5 = null;

                if($request->ocv_card_number_inputted_1){
                    $response_ocv_1 = Othercardvalidation::create($input_other_card_validations_1);
                }
                if($request->ocv_card_number_inputted_2){
                    $response_ocv_2 = Othercardvalidation::create($input_other_card_validations_2);
                }
                if($request->ocv_card_number_inputted_3){
                    $response_ocv_3 = Othercardvalidation::create($input_other_card_validations_3);
                }
                if($request->ocv_card_number_inputted_4){
                    $response_ocv_4 = Othercardvalidation::create($input_other_card_validations_4);
                }
                if($request->ocv_card_number_inputted_5){
                    $response_ocv_5 = Othercardvalidation::create($input_other_card_validations_5);
                }

                $tables = array();

                $tables['nma_validations'] = $response_nv;
                $tables['card_validation_details'] = $reponse_cvd;
                $tables['grantee_validations'] = $response_gv;
                $tables['pawning_validation_details'] = $response_pvd;
                $tables['other_card_validations_1'] = $response_ocv_1;
                $tables['other_card_validations_2'] = $response_ocv_2;
                $tables['other_card_validations_3'] = $response_ocv_3;
                $tables['other_card_validations_4'] = $response_ocv_4;
                $tables['other_card_validations_5'] = $response_ocv_5;
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