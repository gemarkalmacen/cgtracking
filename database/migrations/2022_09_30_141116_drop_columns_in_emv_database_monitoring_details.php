<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropColumnsInEmvDatabaseMonitoringDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('emv_monitoring_details', function (Blueprint $table) {
            $table->dropColumn('pawn_remarks');
            $table->dropColumn('pawn_intervention_staff');
            $table->dropColumn('pawn_other_details');
            $table->dropColumn('informant_full_name');
            $table->dropColumn('accomplish_by_full_name');
            $table->dropColumn('attested_by_full_name');
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
            $table->string('pawn_remarks')->nullable();
            $table->string('pawn_intervention_staff')->nullable();
            $table->string('pawn_other_details')->nullable();
            $table->string('informant_full_name', 70)->nullable()->after('pawn_other_details');
            $table->string('accomplish_by_full_name', 70)->nullable()->after('pawn_other_details');
            $table->string('attested_by_full_name')->nullable();
        });
    }
}
