<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTableEmvdatabasemonitoringAddFieldRecordCounter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('emv_database_monitoring', function (Blueprint $table) {
            $table->integer('record_counter')->default(0)->after('upload_history_id')->comment('this is a solution for tracking multiple records or multiple validation has been made for specific beneficiary.');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('emv_database_monitoring', function (Blueprint $table) {
            $table->dropColumn('record_counter');
        });
    }
}
