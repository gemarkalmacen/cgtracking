<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SortEmvValidationDetailsTableColumnsInCorrectOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("ALTER TABLE emv_validation_details MODIFY nma_validation_id INT AFTER user_id;");
        DB::statement("ALTER TABLE emv_validation_details MODIFY pawning_validation_detail_id INT AFTER nma_validation_id;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
}
