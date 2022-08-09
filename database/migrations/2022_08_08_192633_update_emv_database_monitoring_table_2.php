<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateEmvDatabaseMonitoringTable2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('emv_database_monitoring', function (Blueprint $table) {
            $table->renameColumn('lbp_account', 'current_grantee_card_number');
            $table->string('other_card_number_1')->nullable()->after('lbp_account');
            $table->string('other_card_holder_name_1')->nullable()->after('other_card_number_1');
            $table->string('other_card_number_2')->nullable()->after('other_card_holder_name_1');
            $table->string('other_card_holder_name_2')->nullable()->after('other_card_number_2');
            $table->string('other_card_number_3')->nullable()->after('other_card_holder_name_2');
            $table->string('other_card_holder_name_3')->nullable()->after('other_card_number_3');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('emv_database_monitoring', function (Blueprint $table) {
            $table->renameColumn('current_grantee_card_number', 'lbp_account');
            $table->dropColumn('other_card_number_1');
            $table->dropColumn('other_card_holder_name_1');
            $table->dropColumn('other_card_number_2');
            $table->dropColumn('other_card_holder_name_2');
            $table->dropColumn('other_card_number_3');
            $table->dropColumn('other_card_holder_name_3');
        });
    }
}
