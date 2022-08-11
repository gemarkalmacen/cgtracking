<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTableEmvDatabaseMonitoringChangeIsValidatedIntoValidatedAt extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('ALTER TABLE `emv_database_monitoring` MODIFY COLUMN `is_validated` timestamp DEFAULT NULL;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('emv_database_monitoring', function (Blueprint $table) {
            $table->integer('is_validated')->nullable()->change();
        });
        // DB::statement('ALTER TABLE `emv_database_monitoring` MODIFY COLUMN `is_validated` timestamp DEFAULT NULL;');
    }
}
