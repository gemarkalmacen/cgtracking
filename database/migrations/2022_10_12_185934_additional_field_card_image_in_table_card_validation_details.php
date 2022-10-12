<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AdditionalFieldCardImageInTableCardValidationDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('card_validation_details', function (Blueprint $table) {
            $table->string('card_image')->nullable()->after('card_number_series');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('card_validation_details', function (Blueprint $table) {
            $table->dropColumn('card_image');
        });
    }
}
