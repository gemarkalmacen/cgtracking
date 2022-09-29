<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveLongblobFieldsOnEmvdbmonitoringDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('emv_database_monitoring_details', function (Blueprint $table) {
            $table->dropColumn('accomplish_e_signature');
            $table->dropColumn('informant_e_signature');
            $table->dropColumn('attested_by_e_signature');
            $table->dropColumn('cash_card_picture');
            $table->dropColumn('beneficiary_picture');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("ALTER TABLE `emv_database_monitoring_details` ADD `accomplish_e_signature` LONGBLOB;");
        DB::statement("ALTER TABLE `emv_database_monitoring_details` ADD `informant_e_signature` LONGBLOB;");
        DB::statement("ALTER TABLE `emv_database_monitoring_details` ADD `attested_by_e_signature` LONGBLOB;");
        DB::statement("ALTER TABLE `emv_database_monitoring_details` ADD `cash_card_picture` LONGBLOB;");
        DB::statement("ALTER TABLE `emv_database_monitoring_details` ADD `beneficiary_picture` LONGBLOB;");
    }
}
