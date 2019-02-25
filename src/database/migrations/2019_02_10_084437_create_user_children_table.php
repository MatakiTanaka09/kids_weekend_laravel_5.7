<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserChildrenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userChildren', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->uuid('uuid')->primary();
            $table->uuid('parent_id');
            $table->string('last_name', 50);
            $table->string('first_name', 50);
            $table->string('last_kana', 50);
            $table->string('first_kana', 50);
            $table->string('sex');
            $table->datetime('birth_day');
            $table->timestamps();
        });

//        Schema::table('userChildren', function($table) {
//            $table->foreign('user_parent_id')->references('uuid')->on('userParents')->onDelete('cascade')->onUpdate('cascade');
//        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()

    {
        Schema::dropIfExists('userChildren');
    }
}
