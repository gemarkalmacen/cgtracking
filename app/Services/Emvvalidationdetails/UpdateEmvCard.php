<?php
namespace App\Services\Emvvalidationdetails;

use Ccore\Core\Datatable;
use Illuminate\Support\Facades\DB;

use App\Models\Emvvalidationdetails;
use App\Models\Granteevalidation;
use App\Models\Nmavalidations;
use App\Models\Cardvalidationdetail;
use App\Models\Pawningvalidationdetails;


class UpdateEmvCard  
{
  public function execute($fields)
    {



        $extension_name =($fields['emvdetailsdata']['ext_name'] !="Others") ? $extension_name =$fields['emvdetailsdata']['ext_name'] : $extension_name =$fields['other_ext_name'];
        $contact_no_name =($fields['emvdetailsdata']['contact_no_of'] !="Others") ? $contact_no_name =$fields['emvdetailsdata']['contact_no_of'] : $contact_no_name =$fields['other_contact_name'];
        $grantee = [
          'first_name' => $fields['emvdetailsdata']['first_name'],
          'middle_name' => $fields['emvdetailsdata']['middle_name'],
          'last_name' => $fields['emvdetailsdata']['last_name'],
          'ext_name' => $extension_name,
          'sex' => $fields['emvdetailsdata']['sex'],
          'province_code' => $fields['emvdetailsdata']['province_code'],
          'municipality_code' => $fields['emvdetailsdata']['municipality_code'],
          'barangay_code' => $fields['emvdetailsdata']['barangay_code'],
          'set' => $fields['emvdetailsdata']['set'],
          ];

        $nma_validations = [
          'reason' => $fields['emvdetailsdata']['reason'],
          'remarks' => $fields['emvdetailsdata']['remarks'],
        ];

        $card_validation_details = [
          'distribution_status' => $fields['emvdetailsdata']['distribution_status'],
          'reason_unclaimed' => $fields['emvdetailsdata']['reason_unclaimed'],
          'release_date' => $fields['emvdetailsdata']['cvd_card_release_date_actual'],
          'card_physically_presented' => $fields['emvdetailsdata']['card_physically_presented'],
          'card_pin_is_attached' => $fields['emvdetailsdata']['card_pin_is_attached'],
          'reason_not_presented' => $fields['emvdetailsdata']['reason_not_presented'],
          'card_replacement_request' => $fields['emvdetailsdata']['card_replacement_request'],
          'card_replacement_submitted_details' => $fields['emvdetailsdata']['card_replacement_submitted_details'],
          'release_by' => $fields['emvdetailsdata']['release_by'],
          'release_place' => $fields['emvdetailsdata']['cvd_card_release_place'],
          'card_number_series' => $fields['emvdetailsdata']['card_number_series'],
        ];

        $emv_validation_details = [
          'hh_status' => $fields['emvdetailsdata']['hh_status'],
          'contact_no' => $fields['emvdetailsdata']['contact_no'],
          'contact_no_of' => $contact_no_name,
          'representative_name' => $fields['emvdetailsdata']['representative_name'],
          'relationship_to_grantee' => $fields['emvdetailsdata']['relationship_to_grantee'],
          'overall_remarks' => $fields['emvdetailsdata']['overall_remarks'],
          'is_grantee' => $fields['emvdetailsdata']['is_grantee'],            
        ];

        $pawning_validation_details = [
          'lender_name' => $fields['emvdetailsdata']['lender_name'],
          'lender_address' => $fields['emvdetailsdata']['lender_address'],
          'date_pawned' => $fields['emvdetailsdata']['date_pawned'],
          'date_retrieved' => $fields['emvdetailsdata']['date_retrieved'],
          'loan_amount' => $fields['emvdetailsdata']['loan_amount'],
          'status' => $fields['emvdetailsdata']['status'],
          'reason' => $fields['emvdetailsdata']['pv_reason'],          
          'interest' => $fields['emvdetailsdata']['interest'],     
          'offense_history' => $fields['emvdetailsdata']['offense_history'],   
          'offense_date' => $fields['emvdetailsdata']['offense_date'],   
          'remarks' => $fields['emvdetailsdata']['pvd_remarks'],  
          'staff_intervention' => $fields['emvdetailsdata']['staff_intervention'],  
          'other_details' => $fields['emvdetailsdata']['other_details'],  
        ];

  
      
          $granteevalidation = Granteevalidation::find($fields['emvdetailsdata']['grantee_validation_id']);
          $response = $granteevalidation->update($grantee);

          $nmavalidation = Nmavalidations::find($fields['emvdetailsdata']['nma_validation_id']);
          $response = $nmavalidation->update($nma_validations);

          $cardvalidationdetails = Cardvalidationdetail::find($fields['emvdetailsdata']['card_validation_detail_id']);
          $response = $cardvalidationdetails->update($card_validation_details);


          // dd($fields['emvdetailsdata']['emv_validation_id']); 2657
          $emvvalidationdetails = Emvvalidationdetails::find($fields['emvdetailsdata']['evd_id']);
          $response = $emvvalidationdetails->update($emv_validation_details);

          $pawningvalidationdetails = Pawningvalidationdetails::find($fields['emvdetailsdata']['pawning_validation_detail_id']);
          $response = $pawningvalidationdetails->update($pawning_validation_details);

          return $response;
          // return redirect()->back();
          }
}
