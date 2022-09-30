<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropColumnsInEmvDatabaseMonitoringDetailsGranteeCardPrefixed extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('emv_monitoring_details', function (Blueprint $table) {
            $table->dropColumn('grantee_card_is_physically_presented');
            $table->dropColumn('grantee_card_is_pin_attached');
            $table->dropColumn('grantee_card_reason_not_presented');
            $table->dropColumn('grantee_card_reason_unclaimed');
            $table->dropColumn('grantee_card_replacement_request');
            $table->dropColumn('grantee_card_replacement_request_submitted_details');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('emv_monitoring_details', function (Blueprint $table) {
            $table->text('grantee_card_is_physically_presented')->nullable();
            $table->text('grantee_card_is_pin_attached')->nullable();
            $table->text('grantee_card_reason_not_presented')->nullable();
            $table->text('grantee_card_reason_unclaimed')->nullable();
            $table->text('grantee_card_replacement_request')->nullable();
            $table->text('grantee_card_replacement_request_submitted_details')->nullable();
        });
    }
}
