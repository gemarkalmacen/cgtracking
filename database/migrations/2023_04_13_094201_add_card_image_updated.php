<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCardImageUpdated extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('card_validation_details', function (Blueprint $table) {
            $table->text('card_image_updated')->after('updated_at');
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
            $table->dropColumn('card_image_updated');
        });
    }
}
