<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateOtherCardsValidationAddCardHolderNameField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('other_card_validations', function (Blueprint $table) {
            $table->text('card_holder_name')->nullable()->after('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('other_card_validations', function (Blueprint $table) {
            $table->dropColumn('card_holder_name');
        });
    }
}
