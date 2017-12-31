<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkoutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workout', function (Blueprint $table) {
            $table->increments('id');
            $table->string('workout_date');
            $table->string('workout_description');
            $table->string('results');
            $table->boolean('workout_type'); // push or power
            $table->boolean('count_for_work'); // yes or no
            $table->boolean('prescribed'); // yes or no
            $table->integer('athlete');
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
        Schema::dropIfExists('workouts');
    }
}
