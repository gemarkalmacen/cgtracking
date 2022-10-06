<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameFieldGranteeValidationIdInTableEmvValidationDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('emv_validation_details', function (Blueprint $table) {
            $table->renameColumn('grantee_id', 'grantee_validation_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('emv_validation_details', function (Blueprint $table) {
            $table->renameColumn('grantee_validation_id', 'grantee_id');
        });
    }
}
