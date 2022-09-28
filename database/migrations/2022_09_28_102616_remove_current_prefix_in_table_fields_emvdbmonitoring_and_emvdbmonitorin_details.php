<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveCurrentPrefixInTableFieldsEmvdbmonitoringAndEmvdbmonitorinDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('emv_database_monitoring', function (Blueprint $table) {
            $table->renameColumn('current_grantee_card_number', 'grantee_card_number');
            $table->renameColumn('current_grantee_distribution_status', 'grantee_distribution_status');
            $table->renameColumn('current_grantee_card_release_date', 'grantee_card_release_date');
        });

        Schema::table('emv_database_monitoring_details', function (Blueprint $table) {
            $table->renameColumn('current_grantee_card_number', 'grantee_card_number');
            $table->renameColumn('current_grantee_distribution_status', 'grantee_distribution_status');
            $table->renameColumn('current_grantee_card_release_date', 'grantee_card_release_date');
            $table->renameColumn('current_grantee_card_release_place', 'grantee_card_release_place');
            $table->renameColumn('current_grantee_card_release_by', 'grantee_card_release_by');
            $table->renameColumn('current_grantee_card_number_series', 'grantee_card_number_series');
            $table->renameColumn('current_grantee_is_available', 'grantee_is_available');
            $table->renameColumn('current_grantee_reason', 'grantee_reason');
            $table->renameColumn('current_cash_card_picture', 'cash_card_picture');
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
            $table->renameColumn('grantee_card_number', 'current_grantee_card_number');
            $table->renameColumn('grantee_distribution_status', 'current_grantee_distribution_status');
            $table->renameColumn('grantee_card_release_date', 'current_grantee_card_release_date');
        });

        Schema::table('emv_database_monitoring_details', function (Blueprint $table) {
            $table->renameColumn('grantee_card_number', 'current_grantee_card_number');
            $table->renameColumn('grantee_distribution_status', 'current_grantee_distribution_status');
            $table->renameColumn('grantee_card_release_date', 'current_grantee_card_release_date');
            $table->renameColumn('grantee_card_release_place', 'current_grantee_card_release_place');
            $table->renameColumn('grantee_card_release_by', 'current_grantee_card_release_by');
            $table->renameColumn('grantee_card_number_series', 'current_grantee_card_number_series');
            $table->renameColumn('grantee_is_available', 'current_grantee_is_available');
            $table->renameColumn('grantee_reason', 'current_grantee_reason');
            $table->renameColumn('cash_card_picture', 'current_cash_card_picture');
        });
    }
}
