<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropColumnsInEmvDatabaseMonitoringDetailsRemainingPrefixGrantee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('emv_monitoring_details', function (Blueprint $table) {
            $table->dropColumn('grantee_card_number');
            $table->dropColumn('grantee_distribution_status');
            $table->dropColumn('grantee_card_release_date');
            $table->dropColumn('grantee_card_release_place');
            $table->dropColumn('grantee_card_release_by');
            $table->dropColumn('grantee_card_number_series');
            $table->dropColumn('grantee_is_available');
            $table->dropColumn('grantee_representative');
            $table->dropColumn('grantee_reason');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('emv_monitoring_details', function (Blueprint $table) {
            $table->string('grantee_card_number')->nullable();
            $table->string('grantee_distribution_status')->nullable();
            $table->string('grantee_card_release_date')->nullable();
            $table->string('grantee_card_release_place')->nullable();
            $table->string('grantee_card_release_by')->nullable();
            $table->string('grantee_card_number_series')->nullable();
            $table->string('grantee_is_available', 10)->nullable();
            $table->text('grantee_representative')->nullable();
            $table->string('grantee_reason')->nullable();
        });
    }
}
