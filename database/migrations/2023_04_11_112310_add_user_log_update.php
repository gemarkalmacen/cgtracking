<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserLogUpdate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('emv_validation_details', function (Blueprint $table) {
            $table->integer('user_updated_id')->after('sync_at');
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
            $table->dropColumn('user_updated_id');
            
        });
    }
}
