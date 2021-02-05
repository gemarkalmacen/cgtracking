<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\ToModel;

// class GranteelistsImport implements ToCollection, WithStartRow, WithChunkReading
class GranteelistsImport implements ToModel
{
    use Importable;

    /**
    * @param Collection $collections
    */
    // public function collection(Collection $collections)
    // {
    // }

    public function model(array $row)
    {
        return new User([
           'name'     => $row[0],
           'email'    => $row[1], 
           'password' => Hash::make($row[2]),
        ]);
    }

    /**
     * specify row to start reading
     */
    // public function startRow() : int
    // {
    //     return 2;
    // }

    /**
     * get total row imported
     */
    // public function getRowCount(): int
    // {
    //     return $this->rows;
    // }

    // public function batchSize(): int
    // {
    //     return 1000;
    // }

    // public function chunkSize(): int
    // {
    //     return 1000;
    // }
}
