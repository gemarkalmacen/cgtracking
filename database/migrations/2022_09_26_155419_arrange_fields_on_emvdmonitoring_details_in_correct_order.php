<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ArrangeFieldsOnEmvdmonitoringDetailsInCorrectOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('emv_database_monitoring_details', function(Blueprint $table) {
            $table->renameColumn('other_card_is_available', 'other_card_is_available_1');
            $table->renameColumn('other_card_reason', 'other_card_reason_1');
        });

        DB::statement("ALTER TABLE emv_database_monitoring_details MODIFY other_card_number_series_1 VARCHAR(255) AFTER other_card_holder_name_1;");
        DB::statement("ALTER TABLE emv_database_monitoring_details MODIFY other_card_number_series_2 VARCHAR(255) AFTER other_card_holder_name_2;");
        DB::statement("ALTER TABLE emv_database_monitoring_details MODIFY other_card_number_series_3 VARCHAR(255) AFTER other_card_holder_name_3;");
        DB::statement("ALTER TABLE emv_database_monitoring_details MODIFY other_card_is_available_1 VARCHAR(255) AFTER other_card_number_series_1;");
        DB::statement("ALTER TABLE emv_database_monitoring_details MODIFY other_card_reason_1 VARCHAR(255) AFTER other_card_is_available_1;");
        DB::statement("ALTER TABLE emv_database_monitoring_details MODIFY other_card_is_available_2 VARCHAR(255) AFTER other_card_number_series_2;");
        DB::statement("ALTER TABLE emv_database_monitoring_details MODIFY other_card_reason_2 VARCHAR(255) AFTER other_card_is_available_2;");
        DB::statement("ALTER TABLE emv_database_monitoring_details MODIFY other_card_is_available_3 VARCHAR(255) AFTER other_card_number_series_3;");
        DB::statement("ALTER TABLE emv_database_monitoring_details MODIFY other_card_reason_3 VARCHAR(255) AFTER other_card_is_available_3;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("ALTER TABLE emv_database_monitoring_details MODIFY other_card_number_series_1 VARCHAR(255) AFTER attested_by_full_name;");
        DB::statement("ALTER TABLE emv_database_monitoring_details MODIFY other_card_number_series_2 VARCHAR(255) AFTER other_card_number_series_1;");
        
        Schema::table('emv_database_monitoring_details', function(Blueprint $table) {
            $table->renameColumn('other_card_is_available_1', 'other_card_is_available');
            $table->renameColumn('other_card_reason_1', 'other_card_reason');
        });
    }
}
