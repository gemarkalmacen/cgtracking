<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTableArchiveGranteeLists extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('ALTER TABLE `archive_grantee_list` MODIFY `archive_date` DATETIME NULL;');
        Schema::rename('archive_grantee_list', 'archive_grantee_lists');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('ALTER TABLE `archive_grantee_lists` MODIFY `archive_date` DATETIME NOT NULL;');
        Schema::rename('archive_grantee_lists', 'archive_grantee_list');
    }
}
