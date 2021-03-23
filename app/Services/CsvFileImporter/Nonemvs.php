<?php
namespace App\Services\CsvFileImporter;

use Ccore\Core\Datatable;
use Illuminate\Support\Facades\DB;
use App\Models\Uploadhistory;
use Illuminate\Support\Facades\Auth;

class Nonemvs
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
        $upload_history->table_source = 'non_emv';
        $upload_history->old_file_name = $_old_file_name;
        $upload_history->user_id = Auth::id();
        if($upload_history->save()){
            $query = sprintf('
                LOAD DATA LOCAL INFILE "%s" 
                    INTO TABLE non_emv
                CHARACTER SET latin1
                FIELDS 
                    TERMINATED BY ","
                    OPTIONALLY ENCLOSED BY \'"\'
                    ESCAPED BY ""
                LINES
                    TERMINATED BY "\\n"
                IGNORE 1 LINES
                    (@col1, @col2, @col3, @col4, @col5, @col6, @col7, @col8, @col9, @col10, @col11, @col12, @col13, @col14, @col15, @col16, @col17, @col18, @col19, @col20, @col21, @col22, @col23, @col24, @col25, @col26, @col27, @col28, @col29, @col30, @col31, @col32, @col33, @col34, @col35, @col36, @col37, @col38)
                SET 
                row_id = @col1, card_number = @col2, last_name = @col3, first_name = @col4, middle_name = @col5, naa_address = @col6, cif_permanent_address = @col7, cif_present_address = @col8, nationality_cif_tel_no = @col9, entry_number = @col10, household_number = @col11, birthday = @col12, balance_as_of = @col13, account_balance = @col14, hh_id = @col15, region = @col16, province = @col17, municipality = @col18, barangay = @col19, hh_first_name = @col20, hh_middle_name = @col21, hh_last_name = @col22, hh_ext_name = @col23, hh_birthdate = @col24, entry_id = @col25, mothers_maiden_name = @col26, client_status = @col27, payment_mode = @col28, hh_set = @col29, set_group = @col30,hh_card_number = @col31,kyc_remarks = @col32,account_number_remarks = @col33,age_bracket = @col34,amount_bracket = @col35,nma_remarks = @col36,nma_remarks_reason = @col37,nma_recommended_action = @col38,created_at = CURRENT_TIMESTAMP, upload_history_id = '.$upload_history->id.'
            ', ($file_path));
            return $query;
        } else {
            throw new \ErrorException('Failure to save Import history!');
        }
    }
}
