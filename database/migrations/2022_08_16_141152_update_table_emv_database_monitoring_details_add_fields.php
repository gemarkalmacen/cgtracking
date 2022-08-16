<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTableEmvDatabaseMonitoringDetailsAddFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('emv_database_monitoring_details', function (Blueprint $table) {
            $table->string('other_card_is_available_2')->nullable()->after('other_card_is_available');
            $table->string('other_card_is_available_3')->nullable()->after('other_card_is_available_2');
            $table->string('other_card_reason_2')->nullable()->after('other_card_reason');
            $table->string('other_card_reason_3')->nullable()->after('other_card_reason_2');
            $table->double('pawn_loaned_amount')->nullable()->after('pawn_retrieved_date');
            $table->string('pawn_lender_address')->nullable()->after('pawn_name_of_lender');
            $table->double('pawn_interest')->nullable()->after('pawn_loaned_amount');
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
            $table->dropColumn('other_card_is_available_2');
            $table->dropColumn('other_card_is_available_3');
            $table->dropColumn('other_card_reason_2');
            $table->dropColumn('other_card_reason_3');
            $table->dropColumn('pawn_loaned_amount');
            $table->dropColumn('pawn_lender_address');
            $table->dropColumn('pawn_interest');
        });
    }
}
