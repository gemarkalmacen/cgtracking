<?php
namespace App\Services\Emvvalidationdetails;

use Ccore\Core\Datatable;
use Illuminate\Support\Facades\DB;

use App\Models\Emvvalidationdetails;
use App\Models\Granteevalidation;


class UpdateEmvCard  
{
  public function execute($fields)
    {



      $data = [

        'hh_status' => $fields['hh_status'],
        'province' => $fields['province'],
        'municipality' => $fields['municipality'],
        'barangay' => $fields['barangay'],
        'is_grantee' => $fields['is_grantee'],
        'contact_no' => $fields['contact_no'],
        'contact_no_of' => $fields['contact_no_of'],
        'card_number_prefilled' => $fields['card_number_prefilled'],
        'distribution_status' => $fields['distribution_status'],
        'release_date' => $fields['cvd_card_release_date_actual'],
        'release_by' => $fields['release_by'],
        'release_place' => $fields['cvd_card_release_place'],
        'card_physically_presented' => $fields['card_physically_presented'],
        'card_pin_is_attached' => $fields['card_pin_is_attached'],
        'reason_not_presented' => $fields['reason_not_presented'],
        'card_replacement_request' => $fields['card_replacement_request'],
        'card_replacement_submitted_details' => $fields['card_replacement_submitted_details'],
        'lender_name' => $fields['lender_name'],
        'date_pawned' => $fields['date_pawned'],
        'loan_amount' => $fields['loan_amount'],
        'lender_address' => $fields['lender_address'],
        'date_retrieved' => $fields['date_retrieved'],
        'interest' => $fields['interest'],
        'status' => $fields['status'],
        'reason' => $fields['pv_reason'],
        'offense_history' => $fields['offense_history'],
        'offense_date' => $fields['offense_date'],
        'remarks' => $fields['pvd_remarks'],
        'staff_intervention' => $fields['staff_intervention'],
        'other_details' => $fields['other_details'],
    ];

      $grantee = [
        'first_name' => $fields['first_name'],
        'middle_name' => $fields['middle_name'],
        'last_name' => $fields['last_name'],
        'sex' => $fields['sex'],
        'set' => $fields['set'],
    ];

    $cardvalidation = Emvvalidationdetails::find($fields['evd_id']);
    $response = $cardvalidation->update($data);

    $granteevalidation = Granteevalidation::find($fields['grantee_validation_id']);
    $response1 = $granteevalidation->update($grantee);

    return redirect()->back();
    }
}
