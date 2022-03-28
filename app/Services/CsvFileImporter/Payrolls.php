<?php
namespace App\Services\CsvFileImporter;

use Ccore\Core\Datatable;
use Illuminate\Support\Facades\DB;

use App\Models\Payroll;
use App\Models\Role;
use App\Models\Uploadhistory;
use Illuminate\Support\Facades\Auth;

class Payrolls
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
            $upload_history->table_source = 'payroll';
            $upload_history->old_file_name = $_old_file_name;
            $upload_history->user_id = Auth::id();
            if($upload_history->save()){
                $query = sprintf('
                    LOAD DATA LOCAL INFILE "%s" 
                        INTO TABLE payroll
                    CHARACTER SET latin1
                    FIELDS 
                        TERMINATED BY ","
                        OPTIONALLY ENCLOSED BY \'"\'
                        ESCAPED BY ""
                    LINES 
                        TERMINATED BY "\\n"
                    IGNORE 1 LINES
                        (@col1, @col2, @col3, @col4, @col5, @col6, @col7, @col8, @col9, @col10, @col11, @col12, @col13, @col14, @col15, @col16, @col17, @col18, @col19, @col20, @col21, @col22, @col23, @col24, @col25, @col26) 
                    SET 
                        period = @col1, year = @col2, payroll_type = @col3, region = @col4, province = @col5, municipality = @col6, barangay = @col7, address_psgc = @col8, lastname = @col9, firstname = @col10, middlename = @col11, household_id = @col12, hhset = @col13, mop = @col14, card = @col15, payroll_date = @col16, educ_dc_elem = @col17, educ_jr_hs = @col18, educ_sr_hs = @col19, educ_total_hs = @col20, total_educ = @col21, health = @col22, rice = @col23, total_amount = @col24, `set` = @col25, set_group = @col26, created_at = CURRENT_TIMESTAMP, upload_history_id = '.$upload_history->id.'
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
