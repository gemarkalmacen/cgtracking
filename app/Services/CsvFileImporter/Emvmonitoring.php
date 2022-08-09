<?php
namespace App\Services\CsvFileImporter;

use Ccore\Core\Datatable;
use Illuminate\Support\Facades\DB;

use App\Models\Role;
use App\Models\Uploadhistory;
use Illuminate\Support\Facades\Auth;

class Emvmonitoring
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
            $upload_history->table_source = 'emv_database_monitoring';
            $upload_history->old_file_name = $_old_file_name;
            $upload_history->user_id = Auth::id();
            if($upload_history->save()){
                $query = sprintf('
                    LOAD DATA LOCAL INFILE "%s" 
                        INTO TABLE emv_database_monitoring
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
                    full_name = @col1, hh_id = @col2, client_status = @col3, hh_set_group = @col4, address = @col5, sex = @col6, current_grantee_card_number = @col7, other_card_number_1 = @col8, other_card_holder_name_1 = @col9, other_card_number_2 = @col10, other_card_holder_name_2 = @col11, other_card_number_3 = @col12, other_card_holder_name_3 = @col13, created_at = CURRENT_TIMESTAMP, upload_history_id = '.$upload_history->id.'
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
