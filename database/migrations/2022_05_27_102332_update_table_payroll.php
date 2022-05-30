<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTablePayroll extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('payroll', function (Blueprint $table) {
            $table->decimal('adjustment_amount', 15, 2)->after('total_amount')->nullable();
            $table->decimal('net_amount', 15, 2)->after('adjustment_amount')->nullable();
            $table->renameColumn('total_amount', 'gross_amount');
            $table->decimal('educ_dc_elem', 15, 2)->nullable()->change();
            $table->decimal('educ_jr_hs', 15, 2)->nullable()->change();
            $table->decimal('educ_sr_hs', 15, 2)->nullable()->change();
            $table->decimal('educ_total_hs', 15, 2)->nullable()->change();
            $table->decimal('total_educ', 15, 2)->nullable()->change();
            $table->decimal('health', 15, 2)->nullable()->change();
            $table->decimal('rice', 15, 2)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('payroll', function (Blueprint $table) {
            $table->renameColumn('gross_amount', 'total_amount');
            $table->dropColumn('net_amount');
            $table->dropColumn('adjustment_amount');
            $table->bigInteger('educ_dc_elem')->nullable()->change();
            $table->bigInteger('educ_jr_hs')->nullable()->change();
            $table->bigInteger('educ_sr_hs')->nullable()->change();
            $table->bigInteger('educ_total_hs')->nullable()->change();
            $table->bigInteger('total_educ')->nullable()->change();
            $table->bigInteger('health')->nullable()->change();
            $table->bigInteger('rice')->nullable()->change();
        });
    }
}
