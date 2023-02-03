<?php

namespace App\Exports;
use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\Services\Frames\GetFrames;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use App\Models\Emvvalidationdetails;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithTitle;

class ExportData implements FromCollection,WithHeadings, WithEvents, WithTitle
{


    /**
    * @return \Illuminate\Support\Collection
    */


    public function collection()
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
        'emv_validation_details.contact_no','emv_validation_details.contact_no_of','cvd.card_number_prefilled','ev.grantee_distribution_status as ev_distribution_status_record','cvd.distribution_status',
        'ev.grantee_card_release_date as ev_card_release_date_record',DB::raw('DATE_FORMAT(cvd.release_date, "%m/%d/%Y") as cvd_card_release_date_actual'),
        'cvd.release_by','cvd.release_place as cvd_card_release_place','cvd.card_physically_presented','cvd.card_pin_is_attached',
        'cvd.reason_not_presented','cvd.reason_unclaimed','cvd.card_replacement_request',
        'cvd.card_replacement_submitted_details','pvd.lender_name','pvd.date_pawned','pvd.loan_amount',
        'pvd.lender_address','pvd.date_retrieved','pvd.interest','pvd.status','pvd.reason as pv_reason',
        'pvd.offense_history','pvd.offense_date','pvd.remarks as pvd_remarks','pvd.staff_intervention','pvd.other_details',
        'cvd.card_number_system_generated','cvd.card_number_inputted',
        'cvd.card_number_series','ev.non_emv_card_number',
        'ev.card_name','nv.amount','nv.reason','nv.date_claimed','nv.remarks',
        'emv_validation_details.overall_remarks','u.username','emv_validation_details.created_at'
        ])
        ->get();


        return $query;

        // return User::select('username','email')->get();
        // return User::all();
    }
    public function headings(): array
    {        
        return [
            'Household number',            
            'Set',
            'Lastname',
            'Firstname',
            'Middlename',
            'Extentionname',
            'Hh status',
            'Province',
            'Municipality',
            'Barangay',
            'Sex',
            'Grantee?',
            'Representative name',
            'Contact no.',
            'Contact no. of?',
            'Card prefilled',
            'Distribution status Record',
            'Distribution status Actual',
            'Grantee release date Record',
            'Card release date Actual',
            'Release by',
            'Release place',
            'Card physically presented',
            'Pin attached?',
            'Reason not presented',
            'Reason unclaimed',
            'Card replacement requests',
            'Card replacement submitted details',
            'Lender name',
            'Date pawned',
            'Loan amount',
            'Lender address',
            'Pawning Date retrieved',
            'Pawning Interest',
            'Pawning Status',
            'Pawning Reason',
            'Offense history',
            'Offense date',
            'Remarks',
            'Staff intervention',
            'Other details',
            'Card number system generated',
            'Card number inputted',
            'Card number series',
            'Non emv card number',
            'Card name',
            'Amount',
            'Reason',
            'Date claimed',
            'Remarks',
            'Overall remarks',
            'User',
            'Date created',
            

        ];
    }


    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event) {
   
                $event->sheet->getDelegate()->getStyle('A1:BB1')
                                ->getFont()
                                ->setBold(true);
   
            },
        ];
    }
    public function title(): string
    {
        return 'Validated Details';
    }
}
