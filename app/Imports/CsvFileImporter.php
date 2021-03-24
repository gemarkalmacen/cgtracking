<?php

namespace App\Imports;

use DB;
use Carbon\Carbon;
use App\Models\Uploadhistory;
use App\Services\CsvFileImporter\Granteelists;
use App\Services\CsvFileImporter\Emvdatabases;
use App\Services\CsvFileImporter\Emvpayrolls;
use App\Services\CsvFileImporter\Overpayments;
use App\Services\CsvFileImporter\Otcpayrolls;
use App\Services\CsvFileImporter\Nonemvs;
use Illuminate\Support\Facades\Auth;


class CsvFileImporter
{
    protected $_original_file_name = null;
    protected $_generated_file_name = null;

    /**
     * Import method used for saving file and importing it using a database query
     * 
     * @param Symfony\Component\HttpFoundation\File\UploadedFile $csv_import
     * @return int number of lines imported
     */
    public function import($csv_import, $parameter)
    {
        // Save file to temp directory
        $moved_file = $this->moveFile($csv_import);

        // Normalize line endings
        $normalized_file = $this->normalize($moved_file);

        // Import contents of the file into database
        return $this->importFileContents($normalized_file, $parameter);
    }

    /**
     * Move File to a temporary storage directory for processing
     * temporary directory must have 0755 permissions in order to be processed
     *
     * @param Symfony\Component\HttpFoundation\File\UploadedFile $csv_import
     * @return Symfony\Component\HttpFoundation\File $moved_file
     */
    private function moveFile($csv_import)
    {
        // Check if directory exists make sure it has correct permissions, if not make it
        if (is_dir($destination_directory = storage_path('imports/references'))) {
            chmod($destination_directory, 0755);
        } else {
            mkdir($destination_directory, 0755, true);
        }

        // Get file's original name
        $original_file_name = $csv_import->getClientOriginalName();

        $this->_original_file_name = $original_file_name;
        $extension = $newstring = substr($original_file_name, -3);
        $fileName = Carbon::now()->toDateString() . '-' . mt_rand(00000000, 99999999) . '.' . $extension;
        $this->_generated_file_name = $fileName;

        // Return moved file as File object
        return $csv_import->move($destination_directory, $fileName);
    }

    /**
     * Convert file line endings to uniform "\r\n" to solve for EOL issues
     * Files that are created on different platforms use different EOL characters
     * This method will convert all line endings to Unix uniform
     *
     * @param string $file_path
     * @return string $file_path
     */
    protected function normalize($file_path)
    {
        //Load the file into a string
        $string = @file_get_contents($file_path);
        if (!$string) {
            return $file_path;
        }

        //Convert all line-endings using regular expression
        $string = preg_replace('~\r\n?~', "\n", $string);
        // removing comma's inside quotation marks
        // $string = preg_replace('/("[^"]+),([^"]+")/', "$1/===/$2", $string);
        file_put_contents($file_path, $string);

        return $file_path;
    }

    /**
     * Import CSV file into Database using LOAD DATA LOCAL INFILE function
     *
     * NOTE: PDO settings must have attribute PDO::MYSQL_ATTR_LOCAL_INFILE => true
     *
     * @param $file_path
     * @return mixed Will return number of lines imported by the query
     */
    private function importFileContents($file_path, $parameter)
    {
        DB::beginTransaction();
        try{
            switch ($parameter) {
                case "granteelists":
                    $granteelists = new Granteelists;
                    $data = $granteelists->execute($file_path,$this->_generated_file_name, $this->_original_file_name);
                    $data_total_count = \DB::table('grantee_lists')->count();
                    if($data_total_count > 0){
                        $query_copy = DB::statement('
                            INSERT INTO 
                                archive_grantee_lists(id, region, province, municipality, barangay, purok, `address`, hh_id, entryid, lastname, firstname, middlename, extensionname, birthday, age, clientstatus, member_status, registrationstatus, sex, relationship_to_hh_head, ipaffiliation, hh_set, `group`, mothers_maiden, date_of_enumeration, lbp_account_number, mode_of_payment, date_tagged_hhstatus, tagged_by, date_registered, created_at, updated_at, upload_history_id, archive_date, user_id)
                            SELECT 
                                id, region, province, municipality, barangay, purok, `address`, hh_id, entryid, lastname, firstname, middlename, extensionname, birthday, age, clientstatus, member_status, registrationstatus, sex, relationship_to_hh_head, ipaffiliation, hh_set, `group`, mothers_maiden, date_of_enumeration, lbp_account_number, mode_of_payment, date_tagged_hhstatus, tagged_by, date_registered, created_at, updated_at, upload_history_id, CURRENT_TIMESTAMP, '.Auth::id().'
                            FROM 
                                grantee_lists');
                        if($query_copy==TRUE){
                            $query_delete = DB::table('grantee_lists')->delete();
                            if(!$query_delete){
                                throw new \ErrorException('Granteelists failed to Archived!');
                            }
                        } else {
                            throw new \ErrorException('Granteelists failed to Archived!');
                        }
                    }

                    $data = DB::connection()->getpdo()->exec($data);
                    $fixed_invalid_date_registered = DB::statement("UPDATE grantee_lists SET date_registered=NULL WHERE '0000-00-00' = DATE_FORMAT(date_registered,'%Y-%m-%d')");
                    $fixed_invalid_date_tagged_hhstatus = DB::statement("UPDATE grantee_lists SET date_tagged_hhstatus=NULL WHERE '0000-00-00' = DATE_FORMAT(date_tagged_hhstatus,'%Y-%m-%d')");
                    $fixed_invalid_date_of_enumeration = DB::statement("UPDATE grantee_lists SET date_of_enumeration=NULL WHERE '0000-00-00' = DATE_FORMAT(date_of_enumeration,'%Y-%m-%d')");
                    $fixed_invalid_birthday = DB::statement("UPDATE grantee_lists SET birthday=NULL WHERE '0000-00-00' = DATE_FORMAT(birthday,'%Y-%m-%d')");
                    break;
                case "emvdatabase":
                    $emvdatabases = new Emvdatabases;
                    $data = $emvdatabases->execute($file_path,$this->_generated_file_name, $this->_original_file_name);
                    $data = DB::connection()->getpdo()->exec($data);
                    $fixed_invalid_dates = DB::statement("UPDATE emv_database SET date_claimed = CASE WHEN '0000-00-00' = DATE_FORMAT(date_claimed,'%Y-%m-%d')THEN NULL ELSE date_claimed END, date_acted = CASE WHEN '0000-00-00' = DATE_FORMAT(date_acted,'%Y-%m-%d')THEN NULL ELSE date_acted END, agreed_distribution_date = CASE WHEN '0000-00-00' = DATE_FORMAT(agreed_distribution_date,'%Y-%m-%d')THEN NULL ELSE agreed_distribution_date END, date_acted = CASE WHEN '0000-00-00' = DATE_FORMAT(date_acted,'%Y-%m-%d')THEN NULL ELSE date_acted END");
                    break;
                case "emvpayroll":
                    $emvpayroll = new Emvpayrolls;
                    $data = $emvpayroll->execute($file_path,$this->_generated_file_name, $this->_original_file_name);
                    $data = DB::connection()->getpdo()->exec($data);
                    $fixed_invalid_dates = DB::statement("UPDATE emv_payroll SET payroll_date = CASE WHEN '0000-00-00' = DATE_FORMAT(payroll_date,'%Y-%m-%d')THEN NULL ELSE payroll_date END");
                    break;
                case "overpayment":
                    $overpayment = new Overpayments;
                    $data = $overpayment->execute($file_path,$this->_generated_file_name, $this->_original_file_name);
                    $data = DB::connection()->getpdo()->exec($data); 
                    $fixed_invalid_dates = DB::statement("UPDATE overpayment SET payroll_date = CASE WHEN '0000-00-00' = DATE_FORMAT(payroll_date,'%Y-%m-%d')THEN NULL ELSE payroll_date END, date_acted_by_lbp = CASE WHEN '0000-00-00' = DATE_FORMAT(date_acted_by_lbp,'%Y-%m-%d')THEN NULL ELSE date_acted_by_lbp END");
                    break;
                case "otcpayroll":
                    $otcpayroll = new Otcpayrolls;
                    $data = $otcpayroll->execute($file_path,$this->_generated_file_name, $this->_original_file_name);
                    $data = DB::connection()->getpdo()->exec($data);
                    $fixed_invalid_dates = DB::statement("UPDATE otc_payroll SET payroll_date = CASE WHEN '0000-00-00' = DATE_FORMAT(payroll_date,'%Y-%m-%d')THEN NULL ELSE payroll_date END");
                    break;
                case "nonemv":
                    $nonemv = new Nonemvs;
                    $data = $nonemv->execute($file_path,$this->_generated_file_name, $this->_original_file_name);
                    $data_total_count = \DB::table('non_emv')->count();
                    if($data_total_count > 0){
                        // $query_copy = DB::statement('
                        //     INSERT INTO 
                        //         archive_non_emv(id, region, province, municipality, barangay, purok, `address`, hh_id, entryid, lastname, firstname, middlename, extensionname, birthday, age, clientstatus, member_status, registrationstatus, sex, relationship_to_hh_head, ipaffiliation, hh_set, `group`, mothers_maiden, date_of_enumeration, lbp_account_number, mode_of_payment, date_tagged_hhstatus, tagged_by, date_registered, created_at, updated_at, upload_history_id, archive_date, user_id)
                        //     SELECT 
                        //         id, region, province, municipality, barangay, purok, `address`, hh_id, entryid, lastname, firstname, middlename, extensionname, birthday, age, clientstatus, member_status, registrationstatus, sex, relationship_to_hh_head, ipaffiliation, hh_set, `group`, mothers_maiden, date_of_enumeration, lbp_account_number, mode_of_payment, date_tagged_hhstatus, tagged_by, date_registered, created_at, updated_at, upload_history_id, CURRENT_TIMESTAMP, '.Auth::id().'
                        //     FROM 
                        //         non_emv');
                        // if($query_copy==TRUE){
                        //     $query_delete = DB::table('non_emv')->delete();
                        //     if(!$query_delete){
                        //         throw new \ErrorException('Non-Emv failed to Archived!');
                        //     }
                        // } else {
                        //     throw new \ErrorException('Non-Emv failed to Archived!');
                        // }
                    }

                    $data = DB::connection()->getpdo()->exec($data);
                    // $fixed_invalid_date_registered = DB::statement("UPDATE grantee_lists SET date_registered=NULL WHERE '0000-00-00' = DATE_FORMAT(date_registered,'%Y-%m-%d')");
                    // $fixed_invalid_date_tagged_hhstatus = DB::statement("UPDATE grantee_lists SET date_tagged_hhstatus=NULL WHERE '0000-00-00' = DATE_FORMAT(date_tagged_hhstatus,'%Y-%m-%d')");
                    // $fixed_invalid_date_of_enumeration = DB::statement("UPDATE grantee_lists SET date_of_enumeration=NULL WHERE '0000-00-00' = DATE_FORMAT(date_of_enumeration,'%Y-%m-%d')");
                    // $fixed_invalid_birthday = DB::statement("UPDATE grantee_lists SET birthday=NULL WHERE '0000-00-00' = DATE_FORMAT(birthday,'%Y-%m-%d')");
                    break;
                default:
                    throw new \ErrorException('Import file contents failure!');
                    break;
            }

            DB::commit();

            return $data;

        } catch (Exception $ex) {
            if( $ex->getMessage() != ''){
                $this->errorMessage($stock, $ex->getMessage() );
            }
            DB::rollback();
        }
    }
}
?>