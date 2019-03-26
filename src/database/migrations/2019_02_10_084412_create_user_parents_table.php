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
            $table->string('full_name',50);
            $table->string('full_kana',50);
            $table->string('tel');
            $table->string('sex');
            $table->string('zip_code');
            $table->string('address');
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
