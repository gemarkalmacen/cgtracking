<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTableEmvDatabaseMonitoringDetailsAddFieldSyncAtUserId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('emv_database_monitoring_details', function (Blueprint $table) {
            $table->timestamp('sync_at')->after('current_grantee_card_number_series')->useCurrent()->nullable();
            $table->integer('user_id')->after('current_grantee_card_number_series')->comment('uploaded/validated by user_id');
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
            $table->dropColumn('sync_at');
            $table->dropColumn('user_id');
        });
    }
}
