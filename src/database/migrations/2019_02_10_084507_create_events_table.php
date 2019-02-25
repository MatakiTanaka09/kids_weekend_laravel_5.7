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
            $table->datetime('event_date');
            $table->datetime('event_start_time');
            $table->datetime('event_end_time');
            $table->integer('event_capacity_members')->unsigned();
            $table->string('event_target_min_age')->unsigned();
            $table->string('event_target_max_age')->unsigned();
            $table->boolean('event_parent_attendant');
            $table->integer('event_price')->unsigned();
            $table->string('event_cancel_policy');
            $table->boolean('event_pub_status');
            $table->dateTime('event_arrival_time');
            $table->string('event_state');
            $table->string('event_city');
            $table->string('event_address1');
            $table->string('event_address2');
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
