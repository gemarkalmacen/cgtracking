<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSyncMonitoring extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sync_monitoring', function (Blueprint $table) {
            $table->id();
            $table->integer('sync_counter')->default(0);
            $table->integer('update_counter')->default(0);
            $table->integer('pulldata_counter')->default(0);
            $table->integer('psgc_counter')->default(0);
            $table->integer('user_id');
            $table->timestamp('sync_at')->useCurrent();
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
        Schema::dropIfExists('sync_monitoring');
    }
}
