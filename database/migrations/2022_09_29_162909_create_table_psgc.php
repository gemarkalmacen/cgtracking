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
            $table->integer('psgc_code')->comment('10-digit PSGC');
            $table->string('name');
            $table->integer('correspondence_code');
            $table->string('geographic_level', 10);
            $table->string('old_names');
            $table->string('city_class', 10);
            $table->string('urban_rulal', 10);
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
        Schema::dropIfExists('psgc');
    }
}
