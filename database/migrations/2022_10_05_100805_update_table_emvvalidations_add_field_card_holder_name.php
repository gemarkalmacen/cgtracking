<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTableEmvvalidationsAddFieldCardHolderName extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('emv_validations', function (Blueprint $table) {
            $table->text('other_card_holder_1')->nullable()->after('other_card_number_1');
            $table->text('other_card_holder_2')->nullable()->after('other_card_number_2');
            $table->text('other_card_number_3')->nullable()->after('other_card_release_date_2');
            $table->text('other_card_holder_3')->nullable()->after('other_card_number_3');
            $table->text('other_card_distribution_status_3')->nullable()->after('other_card_holder_3');
            $table->text('other_card_release_date_3')->nullable()->after('other_card_distribution_status_3');
            $table->text('other_card_number_4')->nullable()->after('other_card_release_date_3');
            $table->text('other_card_holder_4')->nullable()->after('other_card_number_4');
            $table->text('other_card_distribution_status_4')->nullable()->after('other_card_holder_4');
            $table->text('other_card_release_date_4')->nullable()->after('other_card_distribution_status_4');
            $table->text('other_card_number_5')->nullable()->after('other_card_release_date_4');
            $table->text('other_card_holder_5')->nullable()->after('other_card_number_5');
            $table->text('other_card_distribution_status_5')->nullable()->after('other_card_holder_5');
            $table->text('other_card_release_date_5')->nullable()->after('other_card_distribution_status_5');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('emv_validations', function (Blueprint $table) {
            $table->dropColumn('other_card_holder_1');
            $table->dropColumn('other_card_holder_2');
            $table->dropColumn('other_card_number_3');
            $table->dropColumn('other_card_holder_3');
            $table->dropColumn('other_card_distribution_status_3');
            $table->dropColumn('other_card_release_date_3');
            $table->dropColumn('other_card_number_4');
            $table->dropColumn('other_card_holder_4');
            $table->dropColumn('other_card_distribution_status_4');
            $table->dropColumn('other_card_release_date_4');
            $table->dropColumn('other_card_number_5');
            $table->dropColumn('other_card_holder_5');
            $table->dropColumn('other_card_distribution_status_5');
            $table->dropColumn('other_card_release_date_5');
        });
    }
}
