<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTableEmvdbmonitoringdetailsAdditionalBlob2Fields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('emv_database_monitoring_details', function (Blueprint $table) {
            $table->binary('beneficiary_picture')->nullable()->after('attested_by_e_signature')->comment('picture of beneficiary along with his/her id picture & cash card');
            $table->binary('current_cash_card_picture')->nullable()->after('attested_by_e_signature')->comment('id picture along with cash card');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('emv_database_monitoring_details', function (Blueprint $table) {
            $table->dropColumn('beneficiary_picture');
            $table->dropColumn('current_cash_card_picture');
        });
    }
}
