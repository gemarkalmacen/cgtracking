<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmvDatabaseMonitoringTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emv_database_monitoring', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('hh_id');
            $table->string('client_status')->nullable();
            $table->string('address')->nullable();
            $table->string('sex', 10)->nullable();
            $table->string('hh_set_group', 5)->nullable();
            $table->string('lbp_account')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emv_database_monitoring');
    }
}
