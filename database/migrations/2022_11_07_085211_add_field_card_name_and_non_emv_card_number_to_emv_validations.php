<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldCardNameAndNonEmvCardNumberToEmvValidations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('emv_validations', function (Blueprint $table) {
            $table->string('non_emv_card_number')->nullable()->after('other_card_release_date_5');
            $table->text('card_name')->nullable()->after('non_emv_card_number');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('emv_validations', function (Blueprint $table) {
            $table->dropColumn('non_emv_card_number');
            $table->dropColumn('card_name');
        });
    }
}
