<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTableGranteeValidationsRemovePsgcAndAddCodePrefixIntoAddresses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('grantee_validations', function (Blueprint $table) {
            $table->dropColumn('psgc_code');
            $table->renameColumn('province', 'province_code');
            $table->renameColumn('municipality', 'municipality_code');
            $table->renameColumn('barangay', 'barangay_code');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('grantee_validations', function (Blueprint $table) {
            $table->integer('psgc_code')->nullable();
            $table->renameColumn('province_code', 'province');
            $table->renameColumn('municipality_code', 'municipality');
            $table->renameColumn('barangay_code', 'barangay');
        });
    }
}
