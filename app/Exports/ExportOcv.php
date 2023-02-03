<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\Services\Frames\GetFrames;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use App\Models\Othercardvalidation;
use Maatwebsite\Excel\Concerns\WithTitle;

class ExportOcv implements FromCollection,WithHeadings, WithEvents, WithTitle
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $query = Othercardvalidation::select(['card_holder_name', 'card_number_system_generated','card_number_inputted','card_number_series',
        'distribution_status','release_date','release_by','release_place','card_physically_presented','card_pin_is_attached','reason_not_presented','reason_unclaimed','card_replacement_request',
        'card_replacement_submitted_details','pawning_remarks','created_at'
        ])
        ->get();

        return $query;
    }

    
    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event) {
   
                $event->sheet->getDelegate()->getStyle('A1:P1')
                                ->getFont()
                                ->setBold(true);
   
            },
        ];
    }

    public function headings(): array
    {        
        return [
            'Card holder name',            
            'Card system generated',
            'Card inputted',
            'Card series',
            'Distribution status',
            'Release date',
            'Release by',
            'Release place',
            'Card physically presented',
            'Pin attached?',
            'Reason not presented',
            'Reason unclaimed',
            'Card replacement requests',
            'Card replacement details',
            'Pawning remarks',
            'Date created',
        ];
    }

    

    public function title(): string
    {
        return 'Other card';
    }
}
