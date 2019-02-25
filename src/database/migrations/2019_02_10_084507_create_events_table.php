<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->uuid('uuid');
            $table->uuid('activity_id');
            $table->datetime('time');
            $table->datetime('started_at');
            $table->datetime('ended_at');
            $table->integer('capacity_members')->unsigned();
            $table->string('target_min_age');
            $table->string('target_max_age');
            $table->boolean('parent_attendant');
            $table->integer('price')->unsigned();
            $table->string('cancel_at');
            $table->boolean('pub_status');
            $table->string('arrived_at');
            $table->string('state');
            $table->string('city');
            $table->string('address1');
            $table->string('address2');
            $table->float('place_longitude')->nullable();
            $table->float('place_latitude')->nullable();
            $table->timestamps();
        });

//        Schema::table('events', function($table) {
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
        Schema::dropIfExists('events');
    }
}
