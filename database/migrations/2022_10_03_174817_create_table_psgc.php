<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePsgc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('psgc', function (Blueprint $table) {
            $table->id();
            $table->text('name_new')->comment('Based on PSGC 2Q 2022 Publication');
            $table->text('name_old')->comment('Based on Cash Grants data');
            $table->string('code', 15);
            $table->string('correspondence_code', 15);
            $table->text('geographic_level')->nullable();
            $table->timestamps();
        });

        DB::update('ALTER table `psgc` modify `code` VARCHAR(15) UNIQUE NOT NULL');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('psgc');
    }
}
