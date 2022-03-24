<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateMigrationTableNonEmvChangeRegionIntoCardHolderStatus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('non_emv', function (Blueprint $table) {
            $table->renameColumn('region', 'card_holder_status');
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
            $table->renameColumn('card_holder_status', 'region');
        });
    }
}
