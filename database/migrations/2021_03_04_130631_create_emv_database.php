<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmvDatabase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emv_database', function (Blueprint $table) {
            $table->id();
            $table->string('region', 10)->nullable();
            $table->string('province', 50)->nullable();
            $table->string('municipality', 100)->nullable();
            $table->string('barangay', 150)->nullable();
            $table->string('hh_id', 50)->nullable();
            $table->string('lbp_account')->nullable();
            $table->date('run_date')->nullable();
            $table->string('first_name')->nullable();
            $table->string('mid_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('acct_description')->nullable();
            $table->string('cct_type', 10)->nullable();
            $table->string('lbp_servicing_branch')->nullable();
            $table->string('distribution_status')->nullable();
            $table->date('date_claimed')->nullable();
            $table->string('reason_why_unclaimed')->nullable();
            $table->string('recommended_action', 10)->nullable();
            $table->string('action_taken', 10)->nullable();
            $table->date('date_acted')->nullable();
            $table->date('agreed_distribution_date')->nullable();
            $table->string('batch', 10)->nullable();
            $table->string('entry_id', 10)->nullable();
            $table->string('embossed_name')->nullable();
            $table->string('emv_acct_discre')->nullable();
            $table->string('hh_status')->nullable();
            $table->string('hh_set')->nullable();
            $table->bigInteger('upload_history_id');
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
        Schema::dropIfExists('emv_database');
    }
}
