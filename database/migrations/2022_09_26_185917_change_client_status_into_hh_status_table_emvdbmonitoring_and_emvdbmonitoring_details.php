<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeClientStatusIntoHhStatusTableEmvdbmonitoringAndEmvdbmonitoringDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("ALTER TABLE emv_database_monitoring_details MODIFY current_grantee_card_number VARCHAR(255) AFTER contact;");
        DB::statement("ALTER TABLE emv_database_monitoring_details MODIFY current_grantee_card_number_series VARCHAR(255) AFTER current_grantee_card_release_by;");

        Schema::table('emv_database_monitoring_details', function(Blueprint $table) {
            $table->renameColumn('client_status', 'hh_status');
            $table->string('current_grantee_distribution_status')->nullable()->after('current_grantee_card_number');
            $table->string('other_card_distribution_status_1')->nullable()->after('other_card_number_1');
            $table->string('other_card_release_date_1')->nullable()->after('other_card_distribution_status_1');
            $table->string('other_card_distribution_status_2')->nullable()->after('other_card_number_2');
            $table->string('other_card_release_date_2')->nullable()->after('other_card_distribution_status_2');
            $table->string('other_card_distribution_status_3')->nullable()->after('other_card_number_3');
            $table->string('other_card_release_date_3')->nullable()->after('other_card_distribution_status_3');

        });
        Schema::table('emv_database_monitoring', function(Blueprint $table) {
            $table->renameColumn('client_status', 'hh_status');
            $table->string('current_grantee_distribution_status')->nullable()->after('current_grantee_card_number');
            $table->string('other_card_distribution_status_1')->nullable()->after('other_card_number_1');
            $table->string('other_card_release_date_1')->nullable()->after('other_card_distribution_status_1');
            $table->string('other_card_distribution_status_2')->nullable()->after('other_card_number_2');
            $table->string('other_card_release_date_2')->nullable()->after('other_card_distribution_status_2');
            $table->decimal('nma_amount', 15, 2)->nullable()->after('hh_set_group');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('emv_database_monitoring_details', function(Blueprint $table) {
            $table->renameColumn('hh_status', 'client_status');
            $table->dropColumn('current_grantee_distribution_status');
            $table->dropColumn('other_card_distribution_status_1');
            $table->dropColumn('other_card_release_date_1');
            $table->dropColumn('other_card_distribution_status_2');
            $table->dropColumn('other_card_release_date_2');
            $table->dropColumn('other_card_distribution_status_3');
            $table->dropColumn('other_card_release_date_3');
        });
        Schema::table('emv_database_monitoring', function(Blueprint $table) {
            $table->renameColumn('hh_status', 'client_status');
            $table->dropColumn('current_grantee_distribution_status');
            $table->dropColumn('other_card_distribution_status_1');
            $table->dropColumn('other_card_release_date_1');
            $table->dropColumn('other_card_distribution_status_2');
            $table->dropColumn('other_card_release_date_2');
            $table->dropColumn('nma_amount');
        });
    }
}
