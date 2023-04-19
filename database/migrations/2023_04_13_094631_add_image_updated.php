<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImageUpdated extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('grantee_validations', function (Blueprint $table) {
            $table->text('image_updated')->after('updated_at');
            $table->text('image_additional_updated')->after('image_updated');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('grantee_validations', function (Blueprint $table) {
            $table->dropColumn('card_image_updated');
            $table->dropColumn('image_additional_updated');
        });
    }
}
