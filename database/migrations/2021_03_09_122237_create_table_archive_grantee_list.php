<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableArchiveGranteeList extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archive_grantee_list', function (Blueprint $table) {
            $table->id();
            $table->integer('grantee_list_id');
            $table->string('region')->nullable();
            $table->string('province')->nullable();
            $table->string('municipality')->nullable();
            $table->string('barangay')->nullable();
            $table->string('purok')->nullable();
            $table->string('address')->nullable();
            $table->string('hh_id')->nullable();
            $table->string('entryid')->nullable();
            $table->string('lastname')->nullable();
            $table->string('firstname')->nullable();
            $table->string('middlename')->nullable();
            $table->string('extensionname')->nullable();
            $table->date('birthday')->nullable();
            $table->bigInteger('age')->nullable();
            $table->string('clientstatus')->nullable();
            $table->string('member_status')->nullable();
            $table->string('registrationstatus')->nullable();
            $table->string('sex')->nullable();
            $table->string('relationship_to_hh_head')->nullable();
            $table->string('ipaffiliation')->nullable();
            $table->string('hh_set')->nullable();
            $table->string('group')->nullable();
            $table->string('mothers_maiden')->nullable();
            $table->date('date_of_enumeration')->nullable();
            $table->string('lbp_account_number')->nullable();
            $table->string('mode_of_payment')->nullable();
            $table->date('date_tagged_hhstatus')->nullable();
            $table->string('tagged_by')->nullable();
            $table->date('date_registered')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->bigInteger('upload_history_id')->nullable();
            $table->datetime('archive_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('archive_grantee_list');
    }
}
