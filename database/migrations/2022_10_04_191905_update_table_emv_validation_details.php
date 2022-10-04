<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTableEmvValidationDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('emv_validation_details', function (Blueprint $table) {
            $table->bigInteger('contact_no')->after('hh_status')->nullable();
            $table->text('contact_no_of')->after('contact')->nullable();
            $table->text('is_minor')->after('is_grantee')->nullable();
            $table->text('representative_name')->after('assigned_staff')->nullable();
            $table->integer('grantee_id')->after('representative_name')->nullable();
            $table->integer('pawning_validation_detail_id')->next('grantee_id')->nullable();
            $table->integer('nma_validation_id')->next('pawning_validation_detail_id')->nullable();
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
            $table->dropColumn('contact_no');
            $table->dropColumn('contact_no_of');
            $table->dropColumn('is_minor');
            $table->dropColumn('representative_name');
            $table->dropColumn('grantee_id');
            $table->dropColumn('pawning_validation_detail_id');
            $table->dropColumn('nma_validation_id');
        });
    }
}
