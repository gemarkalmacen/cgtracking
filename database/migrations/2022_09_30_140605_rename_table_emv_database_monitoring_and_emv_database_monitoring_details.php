<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameTableEmvDatabaseMonitoringAndEmvDatabaseMonitoringDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::rename('emv_database_monitoring', 'emv_monitoring');
        Schema::rename('emv_database_monitoring_details', 'emv_monitoring_details');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::rename('emv_monitoring', 'emv_database_monitoring');
        Schema::rename('emv_monitoring_details', 'emv_database_monitoring_details');
    }
}
