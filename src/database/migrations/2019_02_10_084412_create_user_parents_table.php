<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserParentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userParents', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->uuid('uuid')->primary();
            $table->integer('user_id')->unsigned();
            $table->string('user_last_name',50);
            $table->string('user_first_name',50);
            $table->string('user_last_kana',50);
            $table->string('user_first_kana',50);
            $table->string('email');
            $table->string('tel');
            $table->string('sex');
            $table->string('u_zip_code1');
            $table->string('u_zip_code2');
            $table->string('u_state');
            $table->string('u_city');
            $table->string('u_address1');
            $table->string('u_address2')->nullable();
            $table->timestamps();
        });

        Schema::table('userParents', function($table) {
            $table->foreign('user_id')->references('id')->on('users');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userParents');
    }
}
