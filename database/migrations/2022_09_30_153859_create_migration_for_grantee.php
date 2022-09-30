<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMigrationForGrantee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grantees', function (Blueprint $table) {
            $table->id();
            $table->string('hh_id', 30)->nullable();
            $table->text('first_name')->nullable();
            $table->text('last_name')->nullable();
            $table->text('middle_name')->nullable();
            $table->text('ext_name')->nullable();
            $table->text('sex')->nullable();
            $table->text('province')->nullable();
            $table->text('municipality')->nullable();
            $table->text('barangay')->nullable();
            $table->integer('psgc_code')->nullable();
            $table->string('set', 5)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grantees');
    }
}
