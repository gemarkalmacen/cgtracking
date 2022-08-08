<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToEmvDatabaseMonitoringDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('emv_database_monitoring_details', function (Blueprint $table) {
            $table->string('full_name')->nullable()->change();
            $table->string('hh_id')->nullable()->change();
            $table->string('emv_database_monitoring_id');
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
            $table->string('full_name')->change();
            $table->string('hh_id')->change();
            $table->dropColumn('emv_database_monitoring_id');
        });
    }
}
