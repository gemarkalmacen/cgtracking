<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropcolumnsInTableEmvMonitoringDetailsWithNmaPrefixes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('emv_monitoring_details', function (Blueprint $table) {
            $table->dropColumn('nma_amount');
            $table->dropColumn('nma_date_claimed');
            $table->dropColumn('nma_reason');
            $table->dropColumn('nma_remarks');
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
            $table->decimal('nma_amount', 15, 2)->nullable();
            $table->date('nma_date_claimed')->nullable();
            $table->string('nma_reason')->nullable();
            $table->string('nma_remarks')->nullable();
        });
    }
}
