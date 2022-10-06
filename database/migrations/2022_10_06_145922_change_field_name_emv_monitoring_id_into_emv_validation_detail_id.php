<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeFieldNameEmvMonitoringIdIntoEmvValidationDetailId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('card_validation_details', function (Blueprint $table) {
            $table->renameColumn('emv_monitoring_id', 'emv_validation_detail_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('card_validation_details', function (Blueprint $table) {
            $table->renameColumn('emv_validation_detail_id', 'emv_monitoring_id');
        });
    }
}
