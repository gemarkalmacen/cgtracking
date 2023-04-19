<?php
namespace App\Services\Emvvalidationdetails;

use Ccore\Core\Datatable;
use Illuminate\Support\Facades\DB;

use App\Models\Othercardvalidation;




class UpdateEmvOcv   
{
  public function execute($fields)
    {

      $data = [
        'card_holder_name' => $fields['emvdetailsdata']['card_holder_name'],
        'card_number_inputted' => $fields['emvdetailsdata']['card_number_inputted'],
        'card_number_series' => $fields['emvdetailsdata']['card_number_series'],
        'card_number_system_generated' => $fields['emvdetailsdata']['card_number_system_generated'],
        'card_physically_presented' => $fields['emvdetailsdata']['card_physically_presented'],
        'card_pin_is_attached' => $fields['emvdetailsdata']['card_pin_is_attached'],
        'card_replacement_request' => $fields['emvdetailsdata']['card_replacement_request'],
        'card_replacement_submitted_details' => $fields['emvdetailsdata']['card_replacement_submitted_details'],
        'distribution_status' => $fields['emvdetailsdata']['distribution_status'],
        'pawning_remarks' => $fields['emvdetailsdata']['pawning_remarks'],
        'reason_not_presented' => $fields['emvdetailsdata']['reason_not_presented'],
        'reason_unclaimed' => $fields['emvdetailsdata']['reason_unclaimed'],
    ];

    $othercard = Othercardvalidation::find($fields['emvdetailsdata']['id']);
    $response = $othercard->update($data);
    return $response;
    // return redirect()->back();
    }
}
