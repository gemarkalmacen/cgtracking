<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoreProcedureForFixingErrorDatesInTableGranteeList extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("CREATE PROCEDURE grantee_list_fix_date_date_registered() 
                        BEGIN 
                            UPDATE 
                                grantee_lists 
                            SET date_registered=NULL 
                            WHERE 
                                DATE_FORMAT(date_registered,'%Y-%m-%d') ='0000-00-00';
                        END");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP PROCEDURE IF EXISTS grantee_list_fix_date_date_registered');
    }
}
