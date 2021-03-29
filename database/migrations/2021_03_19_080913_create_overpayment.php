<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOverpayment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('overpayment', function (Blueprint $table) {
            $table->id();
            $table->string('row_no', 50)->nullable();
            $table->date('run_date')->nullable();
            $table->string('lbp_account', 100)->nullable();
            $table->string('hh_id', 50)->nullable();
            $table->string('lastname')->nullable();
            $table->string('firstname')->nullable();
            $table->string('extension')->nullable();
            $table->string('middlename')->nullable();
            $table->string('filename')->nullable();
            $table->string('ftp_request_filename')->nullable();
            $table->date('date_claimed')->nullable();
            $table->string('account_status')->nullable();
            $table->string('account_balance')->nullable();
            $table->date('date_acted_by_lbp')->nullable();
            $table->string('ref_no')->nullable();
            $table->string('account_status_remarks')->nullable();
            $table->string('mc_no')->nullable();
            $table->string('ref_matching')->nullable();
            $table->string('matching_status')->nullable();
            $table->string('distribution_status')->nullable();
            $table->string('region')->nullable();
            $table->string('status')->nullable();
            $table->string('mop')->nullable();
            $table->string('account_number(db)')->nullable();
            $table->string('old_account')->nullable();
            $table->string('hh_status')->nullable();
            $table->string('bal')->nullable();
            $table->string('co_remarks')->nullable();
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
        Schema::dropIfExists('overpayment');
    }
}
