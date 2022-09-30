<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropcolumnsFromTableEmvMonitoringDetailsWithPrefixesPawn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('emv_monitoring_details', function (Blueprint $table) {
            $table->dropColumn('pawn_name_of_lender');
            $table->dropColumn('pawn_lender_address');
            $table->dropColumn('pawn_date');
            $table->dropColumn('pawn_retrieved_date');
            $table->dropColumn('pawn_loaned_amount');
            $table->dropColumn('pawn_interest');
            $table->dropColumn('pawn_status');
            $table->dropColumn('pawn_reason');
            $table->dropColumn('pawn_offense_history');
            $table->dropColumn('pawn_offense_date');
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
            $table->string('pawn_name_of_lender')->nullable();
            $table->string('pawn_lender_address')->nullable();
            $table->date('pawn_date')->nullable();
            $table->date('pawn_retrieved_date')->nullable();
            $table->double('pawn_loaned_amount')->nullable();
            $table->double('pawn_interest')->nullable();
            $table->string('pawn_status')->nullable();
            $table->string('pawn_reason')->nullable();
            $table->string('pawn_offense_history')->nullable();
            $table->date('pawn_offense_date')->nullable();
        });
    }
}
