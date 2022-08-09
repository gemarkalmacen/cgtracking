<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTableEmvDatabaseMonitoringDetailsAddCardSeries extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('emv_database_monitoring_details', function (Blueprint $table) {
            $table->string('current_grantee_card_number_series')->next('current_grantee_card_number')->nullable();
            $table->string('other_card_number_series_1')->next('other_card_number_1')->nullable();
            $table->string('other_card_number_series_2')->next('other_card_number_2')->nullable();
            $table->string('other_card_number_series_3')->next('other_card_number_3')->nullable();
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
            $table->dropColumn('current_grantee_card_number_series');
            $table->dropColumn('other_card_number_series_1');
            $table->dropColumn('other_card_number_series_2');
            $table->dropColumn('other_card_number_series_3');
        });
    }
}
