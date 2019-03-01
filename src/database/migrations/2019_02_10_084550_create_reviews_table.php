<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->uuid('uuid')->primary();
            $table->uuid('review_user_uuid');
            $table->uuid('event_uuid');
            $table->text('comment');
            $table->integer('star_amount')->unsigned();
            $table->timestamps();
        });

//        Schema::table('userChildren', function($table) {
//            $table->foreign('review_user_id')->references('id')->on('userParents')->onDelete('cascade')->onUpdate('cascade');
//            $table->foreign('activity_id')->references('id')->on('activities');
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
