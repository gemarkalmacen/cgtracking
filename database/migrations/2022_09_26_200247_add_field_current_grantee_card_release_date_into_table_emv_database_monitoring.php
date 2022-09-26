<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldCurrentGranteeCardReleaseDateIntoTableEmvDatabaseMonitoring extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('emv_database_monitoring', function(Blueprint $table) {
            $table->string('current_grantee_card_release_date')->nullable()->after('current_grantee_distribution_status');
            $table->dropColumn('other_card_holder_name_1');
            $table->dropColumn('other_card_holder_name_2');
            $table->dropColumn('other_card_holder_name_3');
            $table->dropColumn('other_card_number_3');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('emv_database_monitoring', function(Blueprint $table) {
            $table->dropColumn('current_grantee_card_release_date');
            $table->string('other_card_holder_name_1')->nullable();
            $table->string('other_card_holder_name_2')->nullable();
            $table->string('other_card_holder_name_3')->nullable();
            $table->string('other_card_number_3')->nullable();
        });
    }
}
