<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTopupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('top_up', function (Blueprint $table) {
            $table->dropColumn('period');
            $table->dropColumn('year');
            $table->dropColumn('province');
            $table->dropColumn('municipality');
            $table->dropColumn('barangay');
            $table->dropColumn('address_psgc');
            $table->dropColumn('lastname');
            $table->dropColumn('firstname');
            $table->dropColumn('middlename');
            $table->dropColumn('household_id');
            $table->dropColumn('hhset');
            $table->dropColumn('mop');
            $table->dropColumn('card');
            $table->dropColumn('payroll_date');
            $table->dropColumn('educ_dc_elem');
            $table->dropColumn('educ_jr_hs');
            $table->dropColumn('educ_sr_hs');
            $table->dropColumn('educ_total_hs');
            $table->dropColumn('total_educ');
            $table->dropColumn('health');
            $table->dropColumn('rice');
            $table->dropColumn('total_amount');
            $table->dropColumn('set');
            $table->dropColumn('set_group');


            $table->string('account_number')->nullable()->after('id');
            $table->string('account_name')->nullable()->after('account_number');
            $table->decimal('amount', $precision = 15, $scale = 2)->default(0)->after('account_name');
            $table->string('transaction_sequence')->nullable()->after('amount');
            $table->date('top_up_date')->nullable()->after('transaction_sequence');
            $table->string('lcc_top_up_batch_num')->nullable()->after('top_up_date');
            $table->string('cct_type')->nullable()->after('lcc_top_up_batch_num');
            $table->string('hh_id')->nullable()->after('region');
            $table->string('period_covered')->nullable()->after('hh_id');
            $table->string('lbp_top_up_status_report')->nullable()->after('period_covered');
            $table->mediumText('lbl_reject_reason')->nullable()->after('lbp_top_up_status_report');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('top_up', function (Blueprint $table) {
            $table->dropColumn('lbl_reject_reason');
            $table->dropColumn('lbp_top_up_status_report');
            $table->dropColumn('period_covered');
            $table->dropColumn('hh_id');
            $table->dropColumn('cct_type');
            $table->dropColumn('lcc_top_up_batch_num');
            $table->dropColumn('top_up_date');
            $table->dropColumn('transaction_sequence');
            $table->dropColumn('amount');
            $table->dropColumn('account_name');
            $table->dropColumn('account_number');

            $table->string('period', 50)->nullable()->after('id');
            $table->year('year', 50)->nullable()->after('period');
            $table->string('province', 50)->nullable()->after('region');
            $table->string('municipality', 100)->nullable()->after('province');
            $table->string('barangay', 150)->nullable()->after('municipality');
            $table->string('address_psgc', 50)->nullable()->after('barangay');
            $table->string('lastname')->nullable()->after('address_psgc');
            $table->string('firstname')->nullable()->after('lastname');
            $table->string('middlename')->nullable()->after('firstname');
            $table->string('household_id', 10)->nullable()->after('middlename');
            $table->string('hhset')->nullable()->after('household_id');
            $table->string('mop')->nullable()->after('hhset');
            $table->string('card', 10)->nullable()->after('mop');
            $table->date('payroll_date')->nullable()->after('card');
            $table->bigInteger('educ_dc_elem')->nullable()->after('payroll_date');
            $table->bigInteger('educ_jr_hs')->nullable()->after('educ_dc_elem');
            $table->bigInteger('educ_sr_hs')->nullable()->after('educ_jr_hs');
            $table->bigInteger('educ_total_hs')->nullable()->after('educ_sr_hs');
            $table->bigInteger('total_educ')->nullable()->after('educ_total_hs');
            $table->bigInteger('health')->nullable()->after('total_educ');
            $table->bigInteger('rice')->nullable()->after('health');
            $table->bigInteger('total_amount')->nullable()->after('rice');
            $table->string('set', 10)->nullable()->after('total_amount');
            $table->string('set_group', 10)->nullable()->after('set');
        });
    }
}
