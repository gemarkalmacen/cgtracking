<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateMigrationTableNonEmvChangeHouseholdNumberIntoCardStatus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('non_emv', function (Blueprint $table) {
            $table->renameColumn('household_number', 'card_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('non_emv', function (Blueprint $table) {
            $table->renameColumn('card_status', 'household_number');
        });
    }
}
