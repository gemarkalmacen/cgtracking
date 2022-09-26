<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnotherSetOfOtherCardIts4And5WithCompleteDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('emv_database_monitoring_details', function(Blueprint $table) {
            $table->string('other_card_number_4')->nullable()->after('other_card_reason_3');
            $table->string('other_card_distribution_status_4')->nullable()->after('other_card_number_4');
            $table->string('other_card_release_date_4')->nullable()->after('other_card_distribution_status_4');
            $table->string('other_card_holder_name_4')->nullable()->after('other_card_release_date_4');
            $table->string('other_card_number_series_4')->nullable()->after('other_card_holder_name_4');
            $table->string('other_card_is_available_4')->nullable()->after('other_card_number_series_4');
            $table->string('other_card_reason_4')->nullable()->after('other_card_is_available_4');
            $table->string('other_card_number_5')->nullable()->after('other_card_reason_4');
            $table->string('other_card_distribution_status_5')->nullable()->after('other_card_number_5');
            $table->string('other_card_release_date_5')->nullable()->after('other_card_distribution_status_5');
            $table->string('other_card_holder_name_5')->nullable()->after('other_card_release_date_5');
            $table->string('other_card_number_series_5')->nullable()->after('other_card_holder_name_5');
            $table->string('other_card_is_available_5')->nullable()->after('other_card_number_series_5');
            $table->string('other_card_reason_5')->nullable()->after('other_card_is_available_5');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('emv_database_monitoring_details', function(Blueprint $table) {
            $table->dropColumn('other_card_number_4');
            $table->dropColumn('other_card_distribution_status_4');
            $table->dropColumn('other_card_release_date_4');
            $table->dropColumn('other_card_holder_name_4');
            $table->dropColumn('other_card_number_series_4');
            $table->dropColumn('other_card_is_available_4');
            $table->dropColumn('other_card_reason_4');
            $table->dropColumn('other_card_number_5');
            $table->dropColumn('other_card_distribution_status_5');
            $table->dropColumn('other_card_release_date_5');
            $table->dropColumn('other_card_holder_name_5');
            $table->dropColumn('other_card_number_series_5');
            $table->dropColumn('other_card_is_available_5');
            $table->dropColumn('other_card_reason_5');
        });
    }
}
