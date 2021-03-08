<?php
namespace App\Services\CsvFileImporter;

use Ccore\Core\Datatable;
use Illuminate\Support\Facades\DB;

use App\Models\Granteelist;
use App\Models\Role;
use App\Models\Uploadhistory;

class Granteelists
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
            $upload_history->table_source = 'grantee_lists';
            $upload_history->old_file_name = $_old_file_name;
            if($upload_history->save()){
                $query = sprintf('
                    LOAD DATA LOCAL INFILE "%s" 
                        INTO TABLE grantee_lists
                    CHARACTER SET latin1
                    FIELDS 
                        TERMINATED BY ","
                        OPTIONALLY ENCLOSED BY \'"\'
                        ESCAPED BY ""
                    LINES 
                        TERMINATED BY "\\n"
                    IGNORE 1 LINES
                        (@col1, @col2, @col3, @col4, @col5, @col6, @col7, @col8, @col9, @col10, @col11, @col12, @col13, @col14, @col15, @col16, @col17, @col18, @col19, @col20, @col21, @col22, @col23, @col24, @col25, @col26, @col27, @col28, @col29) 
                    SET 
                        region = @col1, province = @col2, municipality = @col3, barangay = @col4, purok = @col5, address = @col6, hh_id = @col7, entryid = @col8, lastname = @col9, firstname = @col10, middlename = @col11, extensionname = @col12, birthday = @col13, age = @col14, clientstatus = @col15, member_status = @col16, registrationstatus = @col17, sex = @col18, relationship_to_hh_head = @col19, ipaffiliation = @col20, hh_set = @col21, `group` = @col22, mothers_maiden = @col23, date_of_enumeration = @col24, lbp_account_number = @col25, mode_of_payment = @col26, date_tagged_hhstatus = @col27, tagged_by = @col28, date_registered = @col29, created_at = CURRENT_TIMESTAMP, upload_history_id = '.$upload_history->id.'
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
