<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateEmvDatabaseMonitoringTableFieldHhSetGroup extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('emv_database_monitoring', function (Blueprint $table) {
            $table->string('sex', 25)->nullable();
            $table->string('hh_set_group', 25)->nullable();
            $table->tinyint('is_updated', 1)->nullable();
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
            $table->dropColumn('sex');
            $table->dropColumn('hh_set_group');
            $table->dropColumn('is_updated');
        });
    }
}
