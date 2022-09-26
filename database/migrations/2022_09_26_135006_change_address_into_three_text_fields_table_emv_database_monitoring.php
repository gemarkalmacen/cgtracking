<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeAddressIntoThreeTextFieldsTableEmvDatabaseMonitoring extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('emv_database_monitoring', function (Blueprint $table) {
            $table->string('province')->nullable()->after('client_status');
            $table->string('municipality')->nullable()->after('province');
            $table->string('barangay')->nullable()->after('municipality');
            $table->dropColumn('address');
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
            $table->dropColumn('province');
            $table->dropColumn('municipality');
            $table->dropColumn('barangay');
            $table->string('address')->nullable();
        });
    }
}
