<?php
namespace App\Helpers;

use Illuminate\Support\Facades\DB;

class UniqueIntegerHelper
{

    /**
     *
     * Generate a unique random integer of characters
     * uses mt_rand() helper for generating the random integer
     *
     * @param     $table - name of the table
     * @param     $col - name of the column that needs to be tested
     * @param int $chars - length of the random integer
     *
     * @return string
     */
    public static function uniqueRandom($table, $col, $chars = 16, $strCode = null){

        $unique = false;

        // Store tested results in array to not test them again
        $tested = [];
        $chars_result = '';
        for ($i=0; $i < $chars; $i++) { 
            $chars_result .= "9";
        }

        do{

            // Generate random string of characters
            $random = mt_rand(1, (int)$chars_result);

            // Check if it's already testing
            // If so, don't query the database again
            if( in_array($random, $tested) ){
                continue;
            }

            // check if $strCode is not null
            if (!is_null($strCode)) {
                $random = $strCode . $random;
            }

            // Check if it is unique in the database
            $count = DB::table($table)->where($col, '=', $random)->count();

            // Store the random character in the tested array
            // To keep track which ones are already tested
            $tested[] = $random;

            // String appears to be unique
            if( $count == 0){
                // Set unique to true to break the loop
                $unique = true;
            }

            // If unique is still false at this point
            // it will just repeat all the steps until
            // it has generated a random string of characters

        }
        while(!$unique);


        return $random;
    }


}