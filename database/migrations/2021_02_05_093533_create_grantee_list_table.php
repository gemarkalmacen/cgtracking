<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGranteeListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grantee_lists', function (Blueprint $table) {
            $table->id();
            $table->string('region', 10)->nullable();
            $table->string('province', 50)->nullable();
            $table->string('municipality', 100)->nullable();
            $table->string('barangay', 150)->nullable();
            $table->string('purok', 50)->nullable();
            $table->string('address')->nullable();
            $table->string('hh_id')->nullable();
            $table->string('entryid')->nullable();
            $table->string('lastname')->nullable();
            $table->string('firstname')->nullable();
            $table->string('middlename')->nullable();
            $table->string('extensionname', 10)->nullable();
            $table->date('birthday')->nullable();
            $table->bigInteger('age')->nullable();
            $table->string('clientstatus')->nullable();
            $table->string('member_status')->nullable();
            $table->string('registrationstatus', 10)->nullable();
            $table->string('sex', 10)->nullable();
            $table->string('relationship_to_hh_head')->nullable();
            $table->string('ipaffiliation')->nullable();
            $table->string('hh_set', 10)->nullable();
            $table->string('group', 10)->nullable();
            $table->string('mothers_maiden')->nullable();
            $table->date('date_of_enumeration')->nullable();
            $table->string('lbp_account_number')->nullable();
            $table->date('mode_of_payment')->nullable();
            $table->string('date_tagged_hhstatus')->nullable();
            $table->string('tagged_by')->nullable();
            $table->date('date_registered')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grantee_list');
    }
}
