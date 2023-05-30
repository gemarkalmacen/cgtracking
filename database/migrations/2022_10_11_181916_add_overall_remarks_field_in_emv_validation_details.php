<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOverallRemarksFieldInEmvValidationDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('emv_validation_details', function (Blueprint $table) {
            $table->string('relationship_to_contact_no')->nullable()->after('is_minor');
            $table->string('overall_remarks')->nullable()->after('relationship_to_grantee');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('emv_validation_details', function (Blueprint $table) {
            $table->dropColumn('relationship_to_contact_no');
            $table->dropColumn('overall_remarks');
        });
    }
}
