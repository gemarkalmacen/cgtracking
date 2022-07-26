<?php
namespace App\Services\CsvFileImporter;

use Ccore\Core\Datatable;
use Illuminate\Support\Facades\DB;

use App\Models\Topup;
use App\Models\Role;
use App\Models\Uploadhistory;
use Illuminate\Support\Facades\Auth;

class Topups
{
    /**
     * Get list of roles execution
     *
     * @return array
     */
    public function execute($file_path, $_file_name, $_old_file_name)
    {
        $file_path = str_replace('\\', '/', $file_path);

        DB::beginTransaction();
        try{
            $upload_history = new Uploadhistory;
            $upload_history->file_name = $_file_name;
            $upload_history->table_source = 'top_up';
            $upload_history->old_file_name = $_old_file_name;
            $upload_history->user_id = Auth::id();
            if($upload_history->save()){
                $query = sprintf('
                    LOAD DATA LOCAL INFILE "%s" 
                        INTO TABLE top_up
                    CHARACTER SET latin1
                    FIELDS 
                        TERMINATED BY ","
                        OPTIONALLY ENCLOSED BY \'"\'
                        ESCAPED BY ""
                    LINES 
                        TERMINATED BY "\\n"
                    IGNORE 1 LINES
                        (@col1, @col2, @col3, @col4, @col5, @col6, @col7, @col8, @col9, @col10, @col11, @col12, @col13) 
                    SET 
                        account_number = @col1, account_name = @col2, amount = @col3, transaction_sequence = @col4, top_up_date = @col5, lcc_top_up_batch_num = @col6, cct_type = @col7, payroll_type = @col8, region = @col9, hh_id = @col10, period_covered = @col11, lbp_top_up_status_report = @col12, lbp_reject_reason = @col13, created_at = CURRENT_TIMESTAMP, upload_history_id = '.$upload_history->id.'
                ', ($file_path));

                DB::commit();
                
                return $query;

            } else {
                throw new \ErrorException('Failure to save Import history!');
            }
        } catch (Exception $ex) {
            if( $ex->getMessage() != ''){
                $this->errorMessage($stock, $ex->getMessage() );
            }
            DB::rollback();
        }
    }
}
