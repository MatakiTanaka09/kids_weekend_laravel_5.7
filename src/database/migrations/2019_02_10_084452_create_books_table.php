<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->uuid('uuid')->primary();
            $table->uuid('user_parent_id');
            $table->uuid('event_id');
            $table->integer('book_price');
            $table->timestamps();
        });

//        Schema::table('books', function($table) {
//            $table->foreign('user_parent_id')->references('id')->on('userParents');
//            $table->foreign('event_id')->references('id')->on('events');
//        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
