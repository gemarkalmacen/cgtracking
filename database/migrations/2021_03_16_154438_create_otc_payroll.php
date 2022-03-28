<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOtcPayroll extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('top_up', function (Blueprint $table) {
            $table->id();
            $table->string('period', 50)->nullable();
            $table->year('year', 50)->nullable();
            $table->string('payroll_type', 50)->nullable();
            $table->string('region', 10)->nullable();
            $table->string('province', 50)->nullable();
            $table->string('municipality', 100)->nullable();
            $table->string('barangay', 150)->nullable();
            $table->string('address_psgc', 50)->nullable();
            $table->string('lastname')->nullable();
            $table->string('firstname')->nullable();
            $table->string('middlename')->nullable();
            $table->string('household_id', 10)->nullable();
            $table->string('hhset')->nullable();
            $table->string('mop')->nullable();
            $table->string('card', 10)->nullable();
            $table->date('payroll_date')->nullable();
            $table->bigInteger('educ_dc_elem')->nullable();
            $table->bigInteger('educ_jr_hs')->nullable();
            $table->bigInteger('educ_sr_hs')->nullable();
            $table->bigInteger('educ_total_hs')->nullable();
            $table->bigInteger('total_educ')->nullable();
            $table->bigInteger('health')->nullable();
            $table->bigInteger('rice')->nullable();
            $table->bigInteger('total_amount')->nullable();
            $table->string('set', 10)->nullable();
            $table->string('set_group', 10)->nullable();
            $table->bigInteger('upload_history_id')->nullable();
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
        Schema::dropIfExists('otc_payroll');
    }
}
