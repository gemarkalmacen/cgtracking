<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCardImageOcv extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('other_card_validations', function (Blueprint $table) {
            $table->text('card_image_updated')->after('user_updated_id');
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
            $table->dropColumn('card_image_updated');
        });
    }
}
