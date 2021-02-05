<?php

namespace App\Services\Granteelists;

use Doctrine\DBAL\Query\QueryException;
use Illuminate\Support\Facades\DB;
use Excel;
use Exception;
use App\Imports\GranteelistsImport;

class UploadGranteelists
{
    protected $errors = [];
    protected $delivery  = null;
    /**
     * @param $storage string default storage when importing stocks
     */
    protected $storage = DIRECTORY_SEPARATOR.'public'.DIRECTORY_SEPARATOR.'import'.DIRECTORY_SEPARATOR;
    /**
     * upload stocks
     * @return object
     */
    public function execute($file)
    {
        $name = $file->getClientOriginalName();
        $extension = $file->extension();
        $fileName = mt_rand(00000000, 99999999) . '.' . $extension;
        $size = $file->getSize();
        $file->storeAs($this->storage, $fileName);
        $path = storage_path(DIRECTORY_SEPARATOR.'app'.$this->storage.$fileName);

        $data = [
            'name' => $name,
            'filename' => $this->storage . $fileName,
            'extension' => $extension,
            'size' => $size
        ];
        $data = (new GranteelistsImport)->toArray($path);
        dd('asd');
        unlink( $path );
        return $this->readData($data[0]);
    }

    private function readData($collections = []){
        $header = true;
        $user = \Auth::user()->id;
        $error = [];
        $stocks = [];
        $successRow = 0;
        $reference_number = null;
        $dr_date = null;
        DB::beginTransaction();
        // try{
        //     foreach( $collections AS $stock ) {
        //         if( !is_array( $stock ) ) {
        //             throw new Exception( $this->errorMessage($stock, 'Invalid row entry') );
        //         }
        //         if( !$this->rowValidation($stock) ){
        //             throw new Exception();
        //         }
        //         if( $header ) {
        //             $supplier = $this->insertSupplier($stock[3]);
        //             if( $supplier ) {
        //                 $this->insertDelivery($stock,$user,$supplier->id);
        //                 $reference_number = sanitizeField($stock[2]);
        //                 $dr_date = sanitizeField($stock[1]);
        //                 if( empty($this->delivery) ) {
        //                     throw new Exception( $this->errorMessage($stock, 'Invalid row entry') );
        //                 }
        //             }else{
        //                 throw new Exception( $this->errorMessage($stock, 'Invalid supplier name') );
        //             }
        //         }
        //         if( isset($this->delivery) ) {
        //             $subcategory = SubCategory::where('name', sanitizeField( $stock[6]) )->first();
        //             if( empty($subcategory) ) {
        //                 throw new Exception( $this->errorMessage($stock, 'Invalid category') );
        //             }

        //             $response = $this->insertStock($stock, $user ?? 0, $this->delivery->id ?? 0, $subcategory->id ?? 0, $reference_number ?? 0, $dr_date ?? null);
        //             if( $response ) {
        //                 $successRow++;
        //             }
        //         }
        //         $header  = false;
        //     }
        //     if( count( $collections ) == $successRow ) {
        //         DB::commit();
        //     }
        // } catch (Exception $ex) {
        //     if( $ex->getMessage() != ''){
        //         $this->errorMessage($stock, $ex->getMessage() );
        //     }
        //     DB::rollback();
        // }
        return [
            'totalRow' => count( $collections ),
            'insert' => $successRow,
            'errors' => $this->errors,
        ];
    }

    private function errorMessage( $stock, $message ) {
        $this->errors[] = [
            'row' => sanitizeField( $stock[0] ),
            'stock_code' => sanitizeField( $stock[6] ),
            'cost_code' => sanitizeField( $stock[7] ),
            'brand_name' => sanitizeField( $stock[3] ),
            'message' => $message
        ];
        return $message;
    }
    public function rowValidation($stock)
    {
        // $valid = true;
        // $amount = sanitizeField( $stock[11] );
        // if( !is_numeric($amount) ){
        //     $this->errorMessage($stock,'Amount should be numeric : '.$amount );
        //     $valid = false;
        // }
        // if( !validateDate( $stock[1] ) ) {
        //     $this->errorMessage($stock,'Invalid date format (YYYY-MM-DD) : '.$stock[1]);
        //     $valid = false;
        // }
        // if( !is_int( $stock[12] ) ) {
        //     $this->errorMessage($stock,'Invalid quantity : '.$stock[12]);
        //     $valid = false;
        // }
        // return $valid;
    }
    private function insertSupplier($supplierName) {
        // if( $supplierName != '' )
        // {
        //     $supplier = Supplier::firstOrCreate([
        //         'code' => sanitizeField( sanitizeField( $supplierName ) )
        //     ],[
        //         'name' => sanitizeField( sanitizeField( $supplierName ) ),
        //         'contact_number' => '',
        //         'address' => '',
        //         'email' => '',
        //     ]);
        //     return $supplier;
        // }else{
        //     return false;
        // }
    }
    private function insertDelivery($stock,$userID,$supplierID) {
        // try{
        //     $this->delivery = (new CreateDeliveries)->execute([
        //         'dr_no' => sanitizeField( $stock[2] ),
        //         'dr_date' => sanitizeField( $stock[1] ),
        //         'supplier_id' => $supplierID,
        //         'si_no' => null,
        //         'si_date' => null,
        //         'agent_fullname' => null,
        //         'agent_contact_number' => null,
        //         'agent_address' => null,
        //         'amount' => null,
        //         'user_id' => $userID,
        //     ]);
        //     return 'OK';
        // }catch(QueryException $e){
        //     return $e->getMessage();
        // }
    }
    private function insertStock($stock,$userID,$deliveryID,$subCategoryID,$reference_number,$dr_date)
    {
        // $stock_data = Stock::create([
        //     'brand_name' => sanitizeField( $stock[4] ),
        //     'description' => sanitizeField( $stock[5] ),
        //     'sub_category_id' => $subCategoryID,
        //     'stock_code' => sanitizeField( $stock[7] ),
        //     'cost_code' => sanitizeField( $stock[8] ),
        //     'size'  => sanitizeField( $stock[9] ),
        //     'unit'  => sanitizeField( $stock[10] ),
        //     'srp'  => sanitizeField( $stock[11] ),
        //     'quantity' => sanitizeField( $stock[12] ),
        //     'color'  => sanitizeField( $stock[13] ),
        //     'stock_details_id'  => $deliveryID,
        //     'discount_percentage'  => 0,
        //     'has_promo'  => 0,
        //     'has_defective'  => 0,
        //     'has_expiration'  => 0,
        //     'is_active'  => 1,
        //     'cost'  => null,
        //     'user_id'  => $userID,
        // ]);

        // return TransactionReport::create([
        //     'reference_type' => 'Stock-In',
        //     'reference_number' => $reference_number,
        //     'reference_id' => $stock_data->id,
        //     'quantity' => sanitizeField( $stock[12] ),
        //     'amount' => sanitizeField( $stock[11] ),
        //     'total_amount' => sanitizeField( $stock[11] ),
        //     'transaction_date' => $dr_date,
        //     'entry_user_id' => $userID, 
        //     'stock_details_id' => $deliveryID,
        // ]);
    }
}
