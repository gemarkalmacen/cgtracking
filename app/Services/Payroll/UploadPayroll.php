<?php

namespace App\Services\Payroll;

use Doctrine\DBAL\Query\QueryException;
use Illuminate\Http\Request;
use Exception;
use League\Csv\Reader;
use League\Csv\Statement;
use App\Imports\CsvFileImporter;
use DB;

class UploadPayroll
{
    protected $errors = [];
    protected $delivery  = null;
    
    /**
     * upload stocks
     * @return object
     */
    public function execute($file)
    {
        $lists = [];
        $successRow = 0;
        $parameter = "payroll";

        if ($file->isValid()) {
            DB::beginTransaction();
            try{
                $csv_importer = new CsvFileImporter();
                if ($successRow = $csv_importer->import($file, $parameter)) {
                    DB::commit();
                } else {
                    throw new Exception( $this->errorMessage($lists, 'Your file did not import!') );
                }
            } catch (Exception $ex) {
                if( $ex->getMessage() != ''){
                    $this->errorMessage($lists, $ex->getMessage() );
                }
                DB::rollback();
            }
        } else {
            throw new Exception( $this->errorMessage($lists, 'You must provide a CSV file for import.') );
        }

        return [
            'insert' => number_format($successRow),
            'errors' => $this->errors,
        ];
    }
    
    private function errorMessage( $stock, $message ) {
        $this->errors[] = [
            'message' => $message
        ];
        return $message;
    }
}
