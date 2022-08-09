<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTableEmvDatabaseMonitoringDetailsForeignKeyIsNotVarchar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('ALTER TABLE `emv_database_monitoring_details` MODIFY COLUMN `current_grantee_card_number_series` varchar(10) DEFAULT NULL AFTER `attested_by_full_name`;');
        DB::statement('ALTER TABLE `emv_database_monitoring_details` MODIFY COLUMN `other_card_number_series_3` varchar(10) DEFAULT NULL AFTER `attested_by_full_name`;');
        DB::statement('ALTER TABLE `emv_database_monitoring_details` MODIFY COLUMN `other_card_number_series_2` varchar(10) DEFAULT NULL AFTER `attested_by_full_name`;');
        DB::statement('ALTER TABLE `emv_database_monitoring_details` MODIFY COLUMN `other_card_number_series_1` varchar(10) DEFAULT NULL AFTER `attested_by_full_name`;');
        DB::statement('ALTER TABLE `emv_database_monitoring_details` MODIFY COLUMN `emv_database_monitoring_id` bigint(20) DEFAULT NULL AFTER `other_card_number_series_3`;');
        Schema::table('emv_database_monitoring_details', function (Blueprint $table) {
            $table->integer('emv_database_monitoring_id')->after('attested_by_full_name')->change();
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
            $table->string('emv_database_monitoring_id')->change();
        });
    }
}
