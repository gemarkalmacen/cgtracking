<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToTableEmvDatabaseMonitoringDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('emv_database_monitoring_details', function (Blueprint $table) {
            $table->text('is_grantee')->after('contact')->nullable();
            $table->text('relationship_to_grantee')->nullable()->after('is_grantee');
            $table->text('contact_of')->nullable()->after('contact')->comment('is contact of?');
            $table->text('grantee_card_is_physically_presented')->nullable()->after('grantee_card_number_series')->comment('Is Physical Cash Card Presented?');
            $table->text('grantee_card_is_pin_attached')->nullable()->after('grantee_card_is_physically_presented')->comment('Is PIN attached in the Cash Card?');
            $table->text('grantee_card_reason_not_presented')->nullable()->after('grantee_card_is_pin_attached')->comment('Reason Why Cash Card Not Presented');
            $table->text('grantee_card_reason_unclaimed')->nullable()->after('grantee_card_reason_not_presented')->comment('Reason Why Cash Card is Unclaimed');
            $table->text('grantee_card_replacement_request')->nullable()->after('grantee_card_reason_unclaimed')->comment('Already Filed Request for Cash Card Replacement?');
            $table->text('grantee_card_replacement_request_submitted_details')->nullable()->after('grantee_card_replacement_request')->comment('When and Whom the Cash Card Replacement Request Submitted?');
            $table->text('grantee_representative')->nullable()->after('grantee_is_available')->comment('Name of Representative');
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
            $table->dropColumn('is_grantee');
            $table->dropColumn('relationship_to_grantee');
            $table->dropColumn('contact_of');
            $table->dropColumn('grantee_card_is_physically_presented');
            $table->dropColumn('grantee_card_is_pin_attached');
            $table->dropColumn('grantee_card_reason_not_presented');
            $table->dropColumn('grantee_card_reason_unclaimed');
            $table->dropColumn('grantee_card_replacement_request');
            $table->dropColumn('grantee_card_replacement_request_submitted_details');
            $table->dropColumn('grantee_representative');
        });
    }
}
