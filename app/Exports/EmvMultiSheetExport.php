<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class EmvMultiSheetExport implements WithMultipleSheets
{
    use Exportable;

    /**
     * @return array
     */
    public function sheets(): array
    {
        $sheets = [];
        $sheets[] = new ExportData();
        $sheets[] = new ExportOcv();
        

        return $sheets;
    }
}
