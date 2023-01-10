<?php
namespace App\Services\Emvvalidationdetails;

use Ccore\Core\Datatable;
use Illuminate\Support\Facades\DB;

use App\Models\Emvvalidationdetails;
use App\Models\Othercardvalidation;




class GetListingEmvvalidationsDetailsList   
{
    public function execute()
    {

      $query = Emvvalidationdetails::leftJoin('emv_validations as ev', 'ev.id', '=', 'emv_validation_details.emv_validation_id')
      ->leftJoin('grantee_validations as gv', 'gv.id', '=', 'emv_validation_details.grantee_validation_id')
      ->leftJoin('card_validation_details as cvd', 'cvd.id', '=', 'emv_validation_details.card_validation_detail_id')
      ->leftJoin('users as u', 'emv_validation_details.user_id', '=', 'u.id')
      ->select(['ev.hh_id', 'gv.set','gv.first_name','gv.middle_name','gv.last_name','gv.ext_name',
      'cvd.card_image','cvd.card_number_inputted',
      'gv.image_additional','gv.image',
      'emv_validation_details.id'
    ]);

        $result = Datatable::of($query, request(), [
            'searchable' => [
                'ev.hh_id',
                'gv.set',
                'gv.first_name',
                'gv.middle_name',
                'gv.last_name',
                'gv.ext_name',
                'cvd.card_image',
                'gv.image_additional',
                'cvd.card_number_inputted',
                'gv.image',
                'emv_validation_details.id',
            ],
            'orderable' => [
              'ev.hh_id',
              'gv.set',
              'gv.first_name',
              'gv.middle_name',
              'gv.last_name',
              'gv.ext_name',
              'cvd.card_image',
              'gv.image_additional',
              'cvd.card_number_inputted',
              'gv.image',
              'emv_validation_details.id',
            ]
        ]);

        $records = $result['query']->get();

        return [
            'data' => $records,
            'draw' => intval(request()->draw),
            'recordsTotal' => $result['total'],
            'recordsFiltered' => $result['total']
        ];

          // $query = Emvvalidationdetails::leftJoin('emv_validations as ev', 'ev.id', '=', 'emv_validation_details.emv_validation_id')
          //   ->leftJoin('grantee_validations as gv', 'gv.id', '=', 'emv_validation_details.grantee_validation_id')
          //   ->leftJoin('card_validation_details as cvd', 'cvd.id', '=', 'emv_validation_details.card_validation_detail_id')
          //   ->leftJoin('users as u', 'emv_validation_details.user_id', '=', 'u.id')
          //   ->select(['ev.hh_id', 'gv.set','gv.first_name',
          //   'cvd.card_image','cvd.card_number_inputted',
          //   'gv.image_additional','gv.image',
          //   'emv_validation_details.id'
          //   ])->get();
            
            // return $query;
    }
}
