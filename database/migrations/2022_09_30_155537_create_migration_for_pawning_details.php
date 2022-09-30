<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMigrationForPawningDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pawning_details', function (Blueprint $table) {
            $table->id();
            $table->text('lender_name')->nullable();
            $table->text('lender_address')->nullable();
            $table->date('date_pawned')->nullable();
            $table->date('date_retrieved')->nullable();
            $table->double('loan_amount',15,2)->nullable();
            $table->text('status')->nullable();
            $table->text('reason')->nullable();
            $table->integer('interest')->nullable()->comment('interest percentage');
            $table->text('offense_history')->nullable();
            $table->date('offense_date')->nullable();
            $table->text('remarks')->nullable();
            $table->text('staff_intervention')->nullable();
            $table->text('other_details')->nullable();
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
        Schema::dropIfExists('pawning_details');
    }
}
