<?php
namespace App\Services\CsvFileImporter;

use Ccore\Core\Datatable;
use Illuminate\Support\Facades\DB;

use App\Models\Overpayment;
use App\Models\Role;
use App\Models\Uploadhistory;
use Illuminate\Support\Facades\Auth;

class Overpayments
{
    /**
     * Get list of roles execution
     *
     * @return array
     */
    public function execute($file_path, $_file_name, $_old_file_name)
    {
        $file_path = str_replace('\\', '/', $file_path);
        $upload_history = new Uploadhistory;
        $upload_history->file_name = $_file_name;
        $upload_history->table_source = 'overpayment';
        $upload_history->old_file_name = $_old_file_name;
        $upload_history->user_id = Auth::id();
        if($upload_history->save()){
            $query = sprintf('
                LOAD DATA LOCAL INFILE "%s" 
                    INTO TABLE overpayment
                CHARACTER SET latin1
                FIELDS 
                    TERMINATED BY ","
                    OPTIONALLY ENCLOSED BY \'"\'
                    ESCAPED BY ""
                LINES
                    TERMINATED BY "\\n"
                IGNORE 1 LINES
                    (@col1, @col2, @col3, @col4, @col5, @col6, @col7, @col8, @col9, @col10, @col11, @col12, @col13, @col14, @col15, @col16, @col17, @col18, @col19, @col20, @col21, @col22, @col23, @col24, @col25, @col26, @col27, @col28) 
                SET 
                    row_no = @col1, run_date = @col2, lbp_account = @col3, hh_id = @col4, lastname = @col5, firstname = @col6, extension = @col7, middlename = @col8, filename = @col9, ftp_request_filename = @col10, date_claimed = @col11, account_status = @col12, account_balance = @col13, date_acted_by_lbp = @col14, ref_no = @col15, account_status_remarks = @col16, mc_no = @col17, ref_matching = @col18, matching_status = @col19, distribution_status = @col20, region = @col21, status = @col22, mop = @col23, `account_number(db)` = @col24, old_account = @col25, hh_status = @col26, bal = @col27, co_remarks = @col28, created_at = CURRENT_TIMESTAMP, upload_history_id = '.$upload_history->id.'
            ', ($file_path));
            return $query;
        } else {
            throw new \ErrorException('Failure to save Import history!');
        }
    }
}
