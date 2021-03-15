<?php

namespace App\Imports;

use DB;
use Carbon\Carbon;
use App\Models\Uploadhistory;
use App\Services\CsvFileImporter\Granteelists;
use App\Services\CsvFileImporter\Emvdatabases;
use App\Services\CsvFileImporter\Emvpayrolls;


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
        switch ($parameter) {
            case "granteelists":
                $granteelists = new Granteelists;
                $data = $granteelists->execute($file_path,$this->_generated_file_name, $this->_original_file_name);
                break;

            case "emvdatabase":
                $emvdatabases = new Emvdatabases;
                $data = $emvdatabases->execute($file_path,$this->_generated_file_name, $this->_original_file_name);
                break;
            case "emvpayroll":
                $emvpayroll = new Emvpayrolls;
                $data = $emvpayroll->execute($file_path,$this->_generated_file_name, $this->_original_file_name);
                break;
            default:
                throw new \ErrorException('Import file contents failure!');
                break;
        }
        
        $data = DB::connection()->getpdo()->exec($data);
        return $data;
    }
}
?>