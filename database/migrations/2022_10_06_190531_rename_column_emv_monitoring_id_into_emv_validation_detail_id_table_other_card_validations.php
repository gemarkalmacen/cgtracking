<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameColumnEmvMonitoringIdIntoEmvValidationDetailIdTableOtherCardValidations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('other_card_validations', function (Blueprint $table) {
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
        Schema::table('other_card_validations', function (Blueprint $table) {
            $table->renameColumn('emv_validation_detail_id', 'emv_monitoring_id');
        });
    }
}
