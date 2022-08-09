<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateMigrationTableNonEmv extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('non_emv', function (Blueprint $table) {
            $table->date('balance_as_of', 150)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('non_emv', function (Blueprint $table) {
        //     $table->double('balance_as_of',15,2)->nullable()->change();
        // });

        DB::statement('ALTER TABLE `non_emv` MODIFY `balance_as_of` DOUBLE(15,2) DEFAULT NULL;');
    }
}
