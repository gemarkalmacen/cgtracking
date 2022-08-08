<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmvDatabaseMonitoringDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emv_database_monitoring_details', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('hh_id');
            $table->string('client_status')->nullable();
            $table->string('address')->nullable();
            $table->string('sex', 25)->nullable();
            $table->string('hh_set_group', 25)->nullable();
            $table->string('assigned_staff')->nullable();
            $table->string('minor_grantee', 10)->nullable();
            $table->integer('contact')->nullable();
            $table->date('current_grantee_card_release_date')->nullable();
            $table->string('current_grantee_card_release_place')->nullable();
            $table->string('current_grantee_card_release_by')->nullable();
            $table->string('current_grantee_is_available', 10)->nullable();
            $table->string('current_grantee_reason')->nullable();
            $table->string('current_grantee_card_number')->nullable();
            $table->string('other_card_number_1')->nullable();
            $table->string('other_card_holder_name_1')->nullable();
            $table->string('other_card_number_2')->nullable();
            $table->string('other_card_holder_name_2')->nullable();
            $table->string('other_card_number_3')->nullable();
            $table->string('other_card_holder_name_3')->nullable();
            $table->string('other_card_is_available')->nullable();
            $table->string('other_card_reason')->nullable();

            $table->decimal('nma_amount', 15, 2)->nullable();
            $table->date('nma_date_claimed')->nullable();
            $table->string('nma_reason')->nullable();
            $table->string('nma_remarks')->nullable();

            $table->string('pawn_name_of_lender')->nullable();
            $table->date('pawn_date')->nullable();
            $table->date('pawn_retrieved_date')->nullable();
            $table->string('pawn_status')->nullable();
            $table->string('pawn_reason')->nullable();

            $table->string('pawn_offense_history')->nullable();
            $table->date('pawn_offense_date')->nullable();
            $table->string('pawn_remarks')->nullable();
            $table->string('pawn_intervention_staff')->nullable();
            $table->string('pawn_other_details')->nullable();

            $table->binary('accomplish_e_signature')->nullable();
            $table->binary('informant_e_signature')->nullable();
            $table->binary('attested_by_e_signature')->nullable();
            $table->string('attested_by_full_name')->nullable();
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
        Schema::dropIfExists('emv_database_monitoring_details');
    }
}
