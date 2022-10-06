<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveColumnEmvValidationDetailIdOnTableCardValidationDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('card_validation_details', function (Blueprint $table) {
            $table->dropColumn('emv_validation_detail_id');
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
            $table->text('emv_validation_detail_id')->nullable();
        });
    }
}
