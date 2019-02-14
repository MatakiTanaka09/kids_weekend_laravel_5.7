<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->uuid('uuid')->primary();
            $table->string('school_name_kana');
            $table->string('school_name');
            $table->string('school_email');
            $table->string('school_hp')->nullable();
            $table->string('school_tel');
            $table->integer('school_zip_code1')->unsigned();
            $table->integer('school_zip_code2')->unsigned();
            $table->string('school_state');
            $table->string('school_city');
            $table->string('school_address1');
            $table->string('school_address2')->nullable();
            $table->text('school_detail');
//            $table->string('school_bank_account');
//            $table->string('school_bank_name');
//            $table->integer('school_bank_branch_code')->unsigned();
//            $table->integer('school_bank_account_number')->unsigned();
//            $table->integer('school_bank_account_type')->unsigned();
//            $table->string('school_bank_beneficiary_name');
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
        Schema::dropIfExists('schools');
    }
}
