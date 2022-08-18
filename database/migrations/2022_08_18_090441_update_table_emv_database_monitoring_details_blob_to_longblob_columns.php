<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTableEmvDatabaseMonitoringDetailsBlobToLongblobColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('emv_database_monitoring_details', function (Blueprint $table) {
            DB::statement("ALTER TABLE `emv_database_monitoring_details` MODIFY `accomplish_e_signature` LONGBLOB;");
            DB::statement("ALTER TABLE `emv_database_monitoring_details` MODIFY `informant_e_signature` LONGBLOB;");
            DB::statement("ALTER TABLE `emv_database_monitoring_details` MODIFY `attested_by_e_signature` LONGBLOB;");
            DB::statement("ALTER TABLE `emv_database_monitoring_details` MODIFY `current_cash_card_picture` LONGBLOB;");
            DB::statement("ALTER TABLE `emv_database_monitoring_details` MODIFY `beneficiary_picture` LONGBLOB;");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('emv_database_monitoring_details', function (Blueprint $table) {
            $table->binary('accomplish_e_signature')->nullable()->change();
            $table->binary('informant_e_signature')->nullable()->change();
            $table->binary('attested_by_e_signature')->nullable()->change();
            $table->binary('current_cash_card_picture')->nullable()->change();
            $table->binary('beneficiary_picture')->nullable()->change();
        });
    }
}
