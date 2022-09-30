<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMigrationForCardDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('card_details', function (Blueprint $table) {
            $table->id();
            $table->string('card_number_prefilled', 30)->nullable()->comment('pre filled data from emv_monitoring');
            $table->string('card_number_system_generated', 30)->nullable()->comment('data from mobile app');
            $table->string('card_number_inputted', 30)->nullable()->comment('data inputted by validator');
            $table->string('card_number_series', 30)->nullable();
            $table->text('distribution_status')->nullable();
            $table->date('release_date')->nullable();
            $table->text('release_by')->nullable();
            $table->text('release_place')->nullable();
            $table->text('card_physically_presented')->nullable();
            $table->text('card_pin_is_attached')->nullable();
            $table->text('reason_not_presented')->nullable();
            $table->text('reason_unclaimed')->nullable();
            $table->text('card_replacement_request')->nullable();
            $table->text('card_replacement_submitted_details')->nullable();
            $table->text('emv_monitoring_id')->nullable();
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
        Schema::dropIfExists('card_details');
    }
}
