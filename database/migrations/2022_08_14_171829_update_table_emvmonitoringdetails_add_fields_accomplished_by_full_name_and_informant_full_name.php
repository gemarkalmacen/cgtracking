<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTableEmvmonitoringdetailsAddFieldsAccomplishedByFullNameAndInformantFullName extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('emv_database_monitoring_details', function (Blueprint $table) {
            $table->string('accomplish_by_full_name', 70)->nullable()->after('pawn_other_details');
            $table->string('informant_full_name', 70)->nullable()->after('pawn_other_details');
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
            $table->dropColumn('accomplish_by_full_name');
            $table->dropColumn('informant_full_name');
        });
    }
}
