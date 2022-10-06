<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMigrationToUpdateFkIdOnTableEmvValidationDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('emv_validation_details', function (Blueprint $table) {
            $table->integer('nma_validation_id')->nullable(false)->change();
            $table->integer('pawning_validation_detail_id')->nullable(false)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('emv_validation_details', function (Blueprint $table) {
            $table->integer('pawning_validation_detail_id')->nullable()->change();
            $table->integer('nma_validation_id')->nullable()->change();
        });
    }
}
