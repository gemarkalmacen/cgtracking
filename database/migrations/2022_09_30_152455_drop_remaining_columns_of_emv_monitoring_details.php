<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropRemainingColumnsOfEmvMonitoringDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('emv_monitoring_details', function (Blueprint $table) {
            $table->dropColumn('first_name');
            $table->dropColumn('last_name');
            $table->dropColumn('middle_name');
            $table->dropColumn('ext_name');
            $table->dropColumn('hh_id');
            $table->dropColumn('province');
            $table->dropColumn('municipality');
            $table->dropColumn('barangay');
            $table->dropColumn('sex');
            $table->dropColumn('hh_set_group');
            $table->dropColumn('minor_grantee');
            $table->dropColumn('contact_of');
            $table->dropColumn('emv_database_monitoring_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('emv_monitoring_details', function (Blueprint $table) {
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('ext_name')->nullable();
            $table->string('hh_id')->nullable();
            $table->string('province')->nullable();
            $table->string('municipality')->nullable();
            $table->string('barangay')->nullable();
            $table->string('sex', 25)->nullable();
            $table->string('hh_set_group', 25)->nullable();
            $table->string('minor_grantee', 10)->nullable();
            $table->text('contact_of')->nullable();
            $table->integer('emv_database_monitoring_id')->nullable();
        });
    }
}
