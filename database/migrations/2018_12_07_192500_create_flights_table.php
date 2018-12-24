<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->increments('id');
            $table->string('flight_code');
            $table->integer('flight_capacity');
            $table->integer('flight_distance');
            $table->string('flight_assigned_plane');
            $table->date('flight_departure');
            $table->date('flight_arrival');
            $table->unsignedInteger('departure_airport_id')->nullable();
            $table->unsignedInteger('arrival_airport_id')->nullable();
            //$table->foreign('departure_airport_id')->references('id')->on('airport')
            //->onDelete('cascade');
            //$table->foreign('arrival_airport_id')->references('id')->on('airport')
            //->onDelete('cascade');
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
        Schema::dropIfExists('flights');
    }
}
