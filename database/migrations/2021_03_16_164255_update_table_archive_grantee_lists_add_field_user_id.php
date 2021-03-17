<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTableArchiveGranteeListsAddFieldUserId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('archive_grantee_lists', function (Blueprint $table) {
            $table->bigInteger('user_id')->comment('User ID archiving this data')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('archive_grantee_lists', function (Blueprint $table) {
            $table->dropColumn('user_id');
        });
    }
}
