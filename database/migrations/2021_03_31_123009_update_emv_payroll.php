<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateEmvPayroll extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('emv_payroll', function (Blueprint $table) {
            $table->string('card', 150)->change();
            $table->string('set', 150)->change();
            $table->string('set_group', 150)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('emv_payroll', function (Blueprint $table) {
            $table->string('card', 10)->change();
            $table->string('set', 10)->change();
            $table->string('set_group', 10)->change();
        });
    }
}
