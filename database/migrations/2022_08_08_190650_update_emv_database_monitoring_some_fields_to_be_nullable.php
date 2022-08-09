<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateEmvDatabaseMonitoringSomeFieldsToBeNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('emv_database_monitoring', function (Blueprint $table) {
            $table->string('full_name')->nullable()->change();
            $table->string('hh_id')->nullable()->change();
            $table->integer('is_updated')->nullable()->change();
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
            $table->string('full_name')->change();
            $table->string('hh_id')->change();
            $table->integer('is_updated')->change();
        });
    }
}
