<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNonEmvTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('non_emv', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('row_id')->nullable();
            $table->string('card_number')->nullable();
            $table->string('last_name')->nullable();
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('naa_address')->nullable();
            $table->string('cif_permanent_address')->nullable();
            $table->string('cif_present_address')->nullable();
            $table->string('nationality_cif_tel_no')->nullable();
            $table->string('entry_number')->nullable();
            $table->string('household_number')->nullable();
            $table->date('birthday')->nullable();
            $table->double('balance_as_of',15,2)->nullable();
            $table->string('account_balance')->nullable();
            $table->string('hh_id')->nullable();
            $table->string('region')->nullable();
            $table->string('province')->nullable();
            $table->string('municipality')->nullable();
            $table->string('barangay')->nullable();
            $table->string('hh_first_name')->nullable();
            $table->string('hh_middle_name')->nullable();
            $table->string('hh_last_name')->nullable();
            $table->string('hh_ext_name')->nullable();
            $table->date('hh_birthdate')->nullable();
            $table->string('entry_id')->nullable();
            $table->string('mothers_maiden_name')->nullable();
            $table->text('client_status')->nullable();
            $table->string('payment_mode')->nullable();
            $table->string('hh_set')->nullable();
            $table->string('set_group')->nullable();
            $table->string('hh_card_number')->nullable();
            $table->string('kyc_remarks')->nullable();
            $table->string('account_number_remarks')->nullable();
            $table->string('age_bracket')->nullable();
            $table->string('amount_bracket')->nullable();
            $table->string('nma_remarks')->nullable();
            $table->string('nma_remarks_reason')->nullable();
            $table->string('nma_recommended_action')->nullable();
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
        Schema::dropIfExists('non_emv');
    }
}
