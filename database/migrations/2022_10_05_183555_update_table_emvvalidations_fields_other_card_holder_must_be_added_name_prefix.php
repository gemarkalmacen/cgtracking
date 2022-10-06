<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTableEmvvalidationsFieldsOtherCardHolderMustBeAddedNamePrefix extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('emv_validations', function (Blueprint $table) {
            $table->renameColumn('other_card_holder_1', 'other_card_holder_name_1');
            $table->renameColumn('other_card_holder_2', 'other_card_holder_name_2');
            $table->renameColumn('other_card_holder_3', 'other_card_holder_name_3');
            $table->renameColumn('other_card_holder_4', 'other_card_holder_name_4');
            $table->renameColumn('other_card_holder_5', 'other_card_holder_name_5');
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
            $table->renameColumn('other_card_holder_name_1', 'other_card_holder_1');
            $table->renameColumn('other_card_holder_name_2', 'other_card_holder_2');
            $table->renameColumn('other_card_holder_name_3', 'other_card_holder_3');
            $table->renameColumn('other_card_holder_name_4', 'other_card_holder_4');
            $table->renameColumn('other_card_holder_name_5', 'other_card_holder_5');
        });
    }
}
