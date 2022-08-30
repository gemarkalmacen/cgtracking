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
            $table->decimal("pawn_loaned_amount", 15)->nullable()->change();
            $table->decimal("pawn_interest", 15)->nullable()->change();
            $table->string("other_card_number_series_1", 255)->nullable()->change();
            $table->string("other_card_number_series_2", 255)->nullable()->change();
            $table->string("other_card_number_series_3", 255)->nullable()->change();
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
            DB::statement("ALTER TABLE `emv_database_monitoring_details` MODIFY `pawn_loaned_amount` DOUBLE;");
            DB::statement("ALTER TABLE `emv_database_monitoring_details` MODIFY `pawn_interest` DOUBLE;");
            $table->string("other_card_number_series_1", 10)->nullable()->change();
            $table->string("other_card_number_series_2", 10)->nullable()->change();
            $table->string("other_card_number_series_3", 10)->nullable()->change();
        });
    }
}
