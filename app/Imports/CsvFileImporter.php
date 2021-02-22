<?php

namespace App\Imports;

use DB;
use Carbon\Carbon;

class CsvFileImporter
{
    /**
     * Import method used for saving file and importing it using a database query
     * 
     * @param Symfony\Component\HttpFoundation\File\UploadedFile $csv_import
     * @return int number of lines imported
     */
    public function import($csv_import)
    {
        // Save file to temp directory
        $moved_file = $this->moveFile($csv_import);

        // Normalize line endings
        $normalized_file = $this->normalize($moved_file);

        // Import contents of the file into database
        return $this->importFileContents($normalized_file);
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
        $extension = $newstring = substr($original_file_name, -3);
        $fileName = Carbon::now()->toDateString() . '-' . mt_rand(00000000, 99999999) . '.' . $extension;

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
    private function importFileContents($file_path)
    {
        $file_path = str_replace('\\', '/', $file_path);

        $query = sprintf('
            LOAD DATA LOCAL INFILE "%s" INTO TABLE grantee_lists 
            CHARACTER SET latin1
            FIELDS 
                TERMINATED BY ","
                OPTIONALLY ENCLOSED BY \'"\'
                ESCAPED BY ""
            LINES 
                TERMINATED BY "\\n"
            IGNORE 1 LINES
            (@col1, @col2, @col3, @col4, @col5, @col6, @col7, @col8, @col9, @col10, @col11, @col12, @col13, @col14, @col15, @col16, @col17, @col18, @col19, @col20, @col21, @col22, @col23, @col24, @col25, @col26, @col27, @col28, @col29) SET region = @col1, province = @col2, municipality = @col3, barangay = @col4, purok = @col5, address = @col6, hh_id = @col7, entryid = @col8, lastname = @col9, firstname = @col10, middlename = @col11, extensionname = @col12, birthday = @col13, age = @col14, clientstatus = @col15, member_status = @col16, registrationstatus = @col17, sex = @col18, relationship_to_hh_head = @col19, ipaffiliation = @col20, hh_set = @col21, `group` = @col22, mothers_maiden = @col23, date_of_enumeration = @col24, lbp_account_number = @col25, mode_of_payment = @col26, date_tagged_hhstatus = @col27, tagged_by = @col28, date_registered = @col29
            ', ($file_path));

        $data = DB::connection()->getpdo()->exec($query);
        return $data;
    }
}
?>