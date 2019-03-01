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
            $table->uuid('uuid')->primary();
            $table->uuid('school_uuid');
            $table->date('date');
            $table->datetime('started_at');
            $table->datetime('ended_at');
            $table->integer('capacity_members')->unsigned();
            $table->string('target_min_age');
            $table->string('target_max_age')->nullable();
            $table->boolean('parent_attendant');
            $table->integer('price')->unsigned();
            $table->string('canceled_at');
            $table->boolean('pub_state');
            $table->string('arrived_at');
            $table->string('state');
            $table->string('city');
            $table->string('address1');
            $table->string('address2');
            $table->float('longitude')->nullable();
            $table->float('latitude')->nullable();
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
