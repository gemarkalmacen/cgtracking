<?php
namespace App\Services\Emvvalidationdetails;

use Ccore\Core\Datatable;
use Illuminate\Support\Facades\DB;

use App\Models\Emvvalidationdetails;
use App\Models\Othercardvalidation;




class GetListingEmvvalidationsDetails
{
    public function execute($id)
    {


          $query = Emvvalidationdetails::leftJoin('emv_validations as ev', 'ev.id', '=', 'emv_validation_details.emv_validation_id')
            ->leftJoin('grantee_validations as gv', 'gv.id', '=', 'emv_validation_details.grantee_validation_id')
            ->leftJoin('nma_validations as nv', 'nv.id', '=', 'emv_validation_details.nma_validation_id')
            ->leftJoin('pawning_validation_details as pvd', 'pvd.id', '=', 'emv_validation_details.pawning_validation_detail_id')
            ->leftJoin('card_validation_details as cvd', 'cvd.id', '=', 'emv_validation_details.card_validation_detail_id')
            ->leftJoin('users as u', 'emv_validation_details.user_id', '=', 'u.id')
            ->leftJoin('psgc as pp', 'pp.correspondence_code', '=', 'gv.province_code')
            ->leftJoin('psgc as pm', 'pm.correspondence_code', '=', 'gv.municipality_code')
            ->leftJoin('psgc as pb', 'pb.correspondence_code', '=', 'gv.barangay_code')
            ->select(['ev.hh_id', 'gv.set','gv.last_name','gv.first_name',
            'gv.middle_name','gv.ext_name','emv_validation_details.hh_status','pp.name_old as province',
            'pm.name_old as municipality','pb.name_old as barangay','gv.sex','emv_validation_details.is_grantee','emv_validation_details.representative_name',
            'emv_validation_details.contact_no','emv_validation_details.contact_no_of','cvd.card_number_prefilled','ev.grantee_distribution_status as ev_distribution_status_record',
            'ev.grantee_card_release_date as ev_card_release_date_record','cvd.distribution_status',DB::raw('DATE_FORMAT(cvd.release_date, "%m/%d/%Y") as cvd_card_release_date_actual'),
            'cvd.release_by','cvd.release_place as cvd_card_release_place','cvd.card_physically_presented','cvd.card_pin_is_attached',
            'cvd.reason_not_presented','cvd.reason_unclaimed','cvd.card_replacement_request',
            'cvd.card_replacement_submitted_details','pvd.lender_name','pvd.date_pawned','pvd.loan_amount',
            'pvd.lender_address','pvd.date_retrieved','pvd.interest','pvd.status','pvd.reason as pv_reason',
            'pvd.offense_history','pvd.offense_date','pvd.remarks as pvd_remarks','pvd.staff_intervention','pvd.other_details',
            'cvd.card_image','cvd.card_number_system_generated','cvd.card_number_inputted',
            'cvd.card_number_series','gv.image_additional','gv.image','ev.non_emv_card_number',
            'ev.card_name','nv.amount','nv.reason','nv.date_claimed','nv.remarks',
            'emv_validation_details.overall_remarks','u.username','emv_validation_details.created_at','emv_validation_details.id as evd_id'
            ])
            ->where('gv.hh_id', $id)->get();
            // dd(Othercardvalidation::where('emv_validation_detail_id',115)->get());
            
            for ($i=0; $i < count($query); $i++) { 
                // dd($query[1]->id);
                
                $query[$i]['other_card']= Othercardvalidation::where('emv_validation_detail_id', $query[$i]->evd_id)->get();

                
                // $query[$i]['other_card']= Othercardvalidation::select(['card_holder_name as AAA','card_number_system_generated AS BBB','card_number_inputted AS CCC','card_number_series AS DDD','card_image AS EEE','distribution_status AS FFF'])
                // ->where('emv_validation_detail_id', $query[$i]->evd_id)->get();
            }  

            
            return $query;

 

            

    }
}
