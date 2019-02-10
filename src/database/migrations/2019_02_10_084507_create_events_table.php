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
            $table->increments('id');
            $table->integer('activity_id')->unsigned();
            $table->datetime('event_date');
            $table->datetime('event_start_time');
            $table->datetime('event_end_time');
            $table->integer('event_capacity_members')->unsigned();
            $table->integer('event_target_min_age')->unsigned();
            $table->integer('event_target_max_age')->unsigned();
            $table->integer('event_parent_attendant')->unsigned();
            $table->integer('event_price')->unsigned();
            $table->integer('event_cancel_policy')->unsigned();
            $table->boolean('event_pub_status');
            $table->integer('event_arrival_time')->unsigned();
            $table->string('event_state');
            $table->string('event_city');
            $table->string('event_address1');
            $table->string('event_address2');
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
        Schema::dropIfExists('events');
    }
}
