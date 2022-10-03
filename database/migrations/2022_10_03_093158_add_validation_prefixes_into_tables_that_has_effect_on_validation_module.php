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
    }
}
