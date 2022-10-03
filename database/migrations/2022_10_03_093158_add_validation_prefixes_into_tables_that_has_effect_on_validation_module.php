<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddValidationPrefixesIntoTablesThatHasEffectOnValidationModule extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::rename('grantees', 'grantee_validations');
        Schema::rename('emv_monitoring', 'emv_validations');
        Schema::rename('emv_monitoring_details', 'emv_validation_details');
        Schema::rename('other_card_details', 'other_card_validations');
        Schema::rename('card_details', 'card_validation_details');
        Schema::rename('pawning_details', 'pawning_validation_details');
        Schema::rename('non_moving_accounts', 'nma_validations');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::rename('grantee_validations', 'grantees');
        Schema::rename('emv_validations', 'emv_monitoring');
        Schema::rename('emv_validation_details', 'emv_monitoring_details');
        Schema::rename('other_card_validations', 'other_card_details');
        Schema::rename('card_validation_details', 'card_details');
        Schema::rename('pawning_validation_details', 'pawning_details');
        Schema::rename('nma_validations', 'non_moving_accounts');
    }
}
