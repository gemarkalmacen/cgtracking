<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldEmvValidationIdIntoTableEmvValidationDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('emv_validation_details', function (Blueprint $table) {
            $table->integer('emv_validation_id')->after('card_validation_detail_id');
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
            $table->dropColumn('emv_validation_id');
        });
    }
}
