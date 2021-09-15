<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->id('resultId');
            $table->foreignId('raceId')->constrained('races')->default(0);
            $table->foreignId('driverId')->constrained('drivers')->default(0);
            $table->foreignId('constructorId')->constrained('constructors')->default(0);
            $table->integer('number')->nullable();
            $table->integer('grid')->default(0);
            $table->integer('position')->nullable();
            $table->string('positiontext');
            $table->integer('positionOrder')->default(0);
            $table->float('points')->default(0);
            $table->integer('laps')->default(0);
            $table->string('time')->nullable();
            $table->integer('milliseconds')->nullable();
            $table->integer('fastestLap')->nullable();
            $table->integer('rank')->nullable()->default(0);
            $table->string('fastestLapTime')->nullable();
            $table->string('fastestLapSpeed')->nullable();
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
        Schema::dropIfExists('results');
    }
}
