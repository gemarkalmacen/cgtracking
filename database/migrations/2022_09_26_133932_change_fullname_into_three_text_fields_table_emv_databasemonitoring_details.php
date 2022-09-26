<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeFullnameIntoThreeTextFieldsTableEmvDatabasemonitoringDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('emv_database_monitoring_details', function (Blueprint $table) {
            $table->string('first_name')->nullable()->after('id');
            $table->string('last_name')->nullable()->after('first_name');
            $table->string('middle_name')->nullable()->after('last_name');
            $table->string('ext_name')->nullable()->after('middle_name');
            $table->dropColumn('full_name');
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
            $table->string('full_name');
            $table->dropColumn('first_name');
            $table->dropColumn('last_name');
            $table->dropColumn('middle_name');
            $table->dropColumn('ext_name');
        });
    }
}
