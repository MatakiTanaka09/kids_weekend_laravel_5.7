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
            $table->increments('id');
            $table->uuid('user_parent_id');
            $table->uuid('user_child_id');
            $table->integer('event_id')->unsigned();
            $table->string('book_price');
            $table->timestamps();
        });

        Schema::table('books', function($table) {
            $table->foreign('user_parent_id')->references('id')->on('userParents');
            $table->foreign('user_child_id')->references('id')->on('userChildren');
        });
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
