<?php
namespace App\Services\CsvFileImporter;

use Ccore\Core\Datatable;
use Illuminate\Support\Facades\DB;

use App\Models\Emvdatabase;
use App\Models\Role;
use App\Models\Uploadhistory;
use Illuminate\Support\Facades\Auth;

class Emvdatabases
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
            $upload_history->table_source = 'emv_database';
            $upload_history->old_file_name = $_old_file_name;
            $upload_history->user_id = Auth::id();
            if($upload_history->save()){
                $query = sprintf('
                    LOAD DATA LOCAL INFILE "%s" 
                        INTO TABLE emv_database
                    CHARACTER SET latin1
                    FIELDS 
                        TERMINATED BY ","
                        OPTIONALLY ENCLOSED BY \'"\'
                        ESCAPED BY ""
                    LINES 
                        TERMINATED BY "\\n"
                    IGNORE 1 LINES
                        (@col1, @col2, @col3, @col4, @col5, @col6, @col7, @col8, @col9, @col10, @col11, @col12, @col13, @col14, @col15, @col16, @col17,@col18, @col19, @col20, @col21, @col22, @col23, @col24, @col25, @col26) 
                    SET 
                    region = @col1, province = @col2, municipality = @col3, barangay = @col4, hh_id = @col5, lbp_account = @col6, run_date = @col7, first_name = @col8, mid_name = @col9, last_name = @col10, acct_description = @col11, cct_type = @col12, lbp_servicing_branch = @col13, distribution_status = @col14, date_claimed = @col15, reason_why_unclaimed = @col16, recommended_action = @col17, action_taken = @col18, date_acted = @col19, agreed_distribution_date = @col20, batch = @col21, entry_id = @col22, embossed_name = @col23, emv_acct_discre = @col24, hh_status = @col25, hh_set = @col26, created_at = CURRENT_TIMESTAMP, upload_history_id = '.$upload_history->id.'
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
