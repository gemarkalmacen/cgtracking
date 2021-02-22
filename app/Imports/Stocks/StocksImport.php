<?php

namespace App\Imports\Stocks;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithStartRow;

class StocksImport implements ToCollection, WithStartRow
{
    use Importable;

    /**
    * @param Collection $collections
    */
    public function collection(Collection $collections)
    {
    }

    /**
     * specify row to start reading
     */
    public function startRow() : int
    {
        return 2;
    }

    /**
     * get total row imported
     */
    public function getRowCount(): int
    {
        return $this->rows;
    }
}
