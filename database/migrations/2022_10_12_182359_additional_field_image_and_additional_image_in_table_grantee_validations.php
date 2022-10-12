<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AdditionalFieldImageAndAdditionalImageInTableGranteeValidations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('grantee_validations', function (Blueprint $table) {
            $table->string('image')->nullable()->after('set');
            $table->string('image_additional')->nullable()->after('image');
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
            $table->dropColumn('image');
            $table->dropColumn('image_additional');
        });
    }
}
