<?php
namespace App\Services\CsvFileImporter;

use Ccore\Core\Datatable;
use Illuminate\Support\Facades\DB;

use App\Models\Role;
use App\Models\Uploadhistory;
use Illuminate\Support\Facades\Auth;

class Emvvalidations
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
            $upload_history->table_source = 'emv_validations';
            $upload_history->old_file_name = $_old_file_name;
            $upload_history->user_id = Auth::id();
            if($upload_history->save()){
                $query = sprintf('
                    LOAD DATA LOCAL INFILE "%s" 
                        INTO TABLE emv_validations
                    CHARACTER SET latin1
                    FIELDS 
                        TERMINATED BY ","
                        OPTIONALLY ENCLOSED BY \'"\'
                        ESCAPED BY ""
                    LINES 
                        TERMINATED BY "\\n"
                    IGNORE 1 LINES
                        (@col1, @col2, @col3, @col4, @col5, @col6, @col7, @col8, @col9, @col10, @col11, @col12, @col13, @col14, @col15, @col16, @col17, @col18, @col19, @col20, @col21, @col22, @col23, @col24, @col25) 
                    SET
                    hh_id = @col1, hh_set_group = @col2, last_name = @col3, first_name = @col4, middle_name = @col5, ext_name = @col6, hh_status = @col7, province = @col8, municipality = @col9, barangay = @col10, sex = @col11, grantee_card_number = @col12, grantee_distribution_status = @col13, grantee_card_release_date = @col14, other_card_number_1 = @col15, other_card_holder_name_1 = @col16, other_card_distribution_status_1 = @col17, other_card_release_date_1 = @col18, other_card_number_2 = @col19, other_card_holder_name_2 = @col20, other_card_distribution_status_2 = @col21, other_card_release_date_2 = @col22, non_emv_card_number = @col23, card_name = @col24, nma_amount = @col25, created_at = CURRENT_TIMESTAMP, upload_history_id = '.$upload_history->id.'
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
