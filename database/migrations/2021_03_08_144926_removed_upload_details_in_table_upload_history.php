<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemovedUploadDetailsInTableUploadHistory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('upload_history', function (Blueprint $table) {
            $table->dropColumn('upload_details');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('upload_history', function (Blueprint $table) {
            $table->string('upload_details')->nullable();
        });
    }
}
