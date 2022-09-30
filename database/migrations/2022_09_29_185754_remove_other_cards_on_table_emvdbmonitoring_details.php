<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveOtherCardsOnTableEmvdbmonitoringDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('emv_database_monitoring_details', function (Blueprint $table) {
            $table->dropColumn('other_card_number_1');
            $table->dropColumn('other_card_distribution_status_1');
            $table->dropColumn('other_card_release_date_1');
            $table->dropColumn('other_card_holder_name_1');
            $table->dropColumn('other_card_number_series_1');
            $table->dropColumn('other_card_is_available_1');
            $table->dropColumn('other_card_reason_1');
            $table->dropColumn('other_card_number_2');
            $table->dropColumn('other_card_distribution_status_2');
            $table->dropColumn('other_card_release_date_2');
            $table->dropColumn('other_card_holder_name_2');
            $table->dropColumn('other_card_number_series_2');
            $table->dropColumn('other_card_is_available_2');
            $table->dropColumn('other_card_reason_2');
            $table->dropColumn('other_card_number_3');
            $table->dropColumn('other_card_distribution_status_3');
            $table->dropColumn('other_card_release_date_3');
            $table->dropColumn('other_card_holder_name_3');
            $table->dropColumn('other_card_number_series_3');
            $table->dropColumn('other_card_is_available_3');
            $table->dropColumn('other_card_reason_3');
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

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("ALTER TABLE emv_database_monitoring_details ADD other_card_is_available_1 VARCHAR(5);");
        DB::statement("ALTER TABLE emv_database_monitoring_details ADD other_card_reason_1 VARCHAR(5);");
        DB::statement("ALTER TABLE emv_database_monitoring_details ADD other_card_is_available_2 VARCHAR(5);");
        DB::statement("ALTER TABLE emv_database_monitoring_details ADD other_card_reason_2 VARCHAR(5);");
        DB::statement("ALTER TABLE emv_database_monitoring_details ADD other_card_is_available_3 VARCHAR(5);");
        DB::statement("ALTER TABLE emv_database_monitoring_details ADD other_card_reason_3 VARCHAR(5);");

        Schema::table('emv_database_monitoring_details', function (Blueprint $table) {
            $table->string('other_card_number_1')->nullable();
            $table->string('other_card_distribution_status_1')->nullable()->after('other_card_number_1');
            $table->string('other_card_release_date_1')->nullable()->after('other_card_distribution_status_1');
            $table->string('other_card_holder_name_1')->nullable()->after('other_card_number_1');
            $table->string("other_card_number_series_1", 255)->nullable();
            // other_card_is_available_1
            // other_card_reason_1
            $table->string('other_card_number_2')->nullable()->after('other_card_holder_name_1');
            $table->string('other_card_distribution_status_2')->nullable()->after('other_card_number_2');
            $table->string('other_card_release_date_2')->nullable()->after('other_card_distribution_status_2');
            $table->string('other_card_holder_name_2')->nullable()->after('other_card_number_2');
            $table->string("other_card_number_series_2", 255)->nullable();
            // other_card_is_available_2
            // other_card_reason_2
            $table->string('other_card_number_3')->nullable()->after('other_card_holder_name_2');
            $table->string('other_card_distribution_status_3')->nullable()->after('other_card_number_3');
            $table->string('other_card_release_date_3')->nullable()->after('other_card_distribution_status_3');
            $table->string('other_card_holder_name_3')->nullable()->after('other_card_number_3');
            $table->string('other_card_number_series_3', 255)->nullable();
            // other_card_is_available_3
            // other_card_reason_3
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
}
