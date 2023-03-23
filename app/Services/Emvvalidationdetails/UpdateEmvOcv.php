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
        'card_holder_name' => $fields['card_holder_name'],
        'card_number_inputted' => $fields['card_number_inputted'],
        'card_number_series' => $fields['card_number_series'],
        'card_number_system_generated' => $fields['card_number_system_generated'],
        'card_physically_presented' => $fields['card_physically_presented'],
        'card_pin_is_attached' => $fields['card_pin_is_attached'],
        'card_replacement_request' => $fields['card_replacement_requests'],
        'card_replacement_submitted_details' => $fields['card_replacement_submitted_details'],
        'distribution_status' => $fields['distribution_status'],
        'pawning_remarks' => $fields['pawning_remarks'],
        'reason_not_presented' => $fields['reason_not_presented'],
        'reason_unclaimed' => $fields['reason_unclaimed'],

    ];

    $othercard = Othercardvalidation::find($fields['id']);
    $response = $othercard->update($data);

    return redirect()->back();


        // $records = $result['query']->get();

        // return [
        //     'data' => $records,
        //     'draw' => intval(request()->draw),
        //     'recordsTotal' => $result['total'],
        //     'recordsFiltered' => $result['total']
        // ];
    }
}
