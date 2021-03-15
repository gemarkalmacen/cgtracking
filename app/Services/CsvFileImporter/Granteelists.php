<?php
namespace App\Services\CsvFileImporter;

use Ccore\Core\Datatable;
use Illuminate\Support\Facades\DB;

use App\Models\Granteelist;
use App\Models\Role;
use App\Models\Uploadhistory;
use Illuminate\Support\Facades\Auth;

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
            $upload_history->user_id = Auth::id();
            if($upload_history->save()){
                
                /** 
                 * ! archived grantee_lists_data into table archive_grantee_lists
                 * */
                // $query_copy = DB::insert('
                // INSERT INTO 
                //     archive_grantee_lists(id, region, province, municipality, barangay, purok, `address`, hh_id, entryid, lastname, firstname, middlename, extensionname, birthday, age, clientstatus, member_status, registrationstatus, sex, relationship_to_hh_head, ipaffiliation, hh_set, `group`, mothers_maiden, date_of_enumeration, lbp_account_number, mode_of_payment, date_tagged_hhstatus, tagged_by, date_registered, created_at, updated_at, upload_history_id)
                // SELECT id, region, province, municipality, barangay, purok, `address`, hh_id, entryid, lastname, firstname, middlename, extensionname, birthday, age, clientstatus, member_status, registrationstatus, sex, relationship_to_hh_head, ipaffiliation, hh_set, `group`, mothers_maiden, date_of_enumeration, lbp_account_number, mode_of_payment, date_tagged_hhstatus, tagged_by, date_registered, created_at, updated_at, upload_history_id FROM grantee_lists');
                $query_copy = 1;

                // echo "run";
                // $fixed_invalid_date_registered = DB::statement('UPDATE grantee_lists SET date_registered=:date_reg WHERE "0000-00-00" =:dateformatt', ['date_reg' => NULL, 'dateformatt' => "DATE_FORMAT(date_registered,'%Y-%m-%d')"]);
                // $fixed_invalid_date_registered = DB::raw("UPDATE grantee_lists SET date_registered=NULL WHERE DATE_FORMAT(date_registered,'%Y-%m-%d') = '0000-00-00'");
                // dd($fixed_invalid_date_registered);
                // $_grantee_lists = Granteelist::where('active', 1)
                //         ->where("DATE_FORMAT(date_registered,'%Y-%m-%d') = '0000-00-00'")
                //         ->update(['date_registered' => NULL]);

                // DB::table('grantee_lists')
                //     ->where("date_registered", '0000-00-00')
                //     ->update(['date_registered' => NULL]);

                $affected = DB::update(
                    'update grantee_lists set date_registered = NULL WHERE date_registered = "0000-00-00"'
                );

                echo "done";
                echo "result == ".$affected;
                dd($affected);
                // die();

                if($query_copy==TRUE){
                    // $query_delete = DB::table('grantee_lists')->delete();
                    $query_delete = 1;
                    if($query_delete==TRUE){
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

                        if($query){
                            $fixed_invalid_date_registered = DB::statement("UPDATE grantee_lists SET date_registered=NULL WHERE '0000-00-00' = DATE_FORMAT(date_registered,'%Y-%m-%d')");
                            $fixed_invalid_date_tagged_hhstatus = DB::statement("UPDATE grantee_lists SET date_tagged_hhstatus=NULL WHERE '0000-00-00' = DATE_FORMAT(date_tagged_hhstatus,'%Y-%m-%d')");
                            $fixed_invalid_date_of_enumeration = DB::statement("UPDATE grantee_lists SET date_of_enumeration=NULL WHERE '0000-00-00' = DATE_FORMAT(date_of_enumeration,'%Y-%m-%d')");
                            $fixed_invalid_birthday = DB::statement("UPDATE grantee_lists SET birthday=NULL WHERE '0000-00-00' = DATE_FORMAT(birthday,'%Y-%m-%d')");
                        }

                        return $query;
                    } else {
                        throw new \ErrorException('Importing Process Failed!');
                    }
                } else {
                    throw new \ErrorException('Importing Process Failed!');
                }
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
