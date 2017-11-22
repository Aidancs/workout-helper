<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExercisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exercises', function (Blueprint $table) {
            $table->increments('id');
            $table->string('exercise_name');
            $table->string('description')->nullable();
            $table->string('weight')->nullable();
            $table->timestamps();
        });

        Schema::table('exercises', function (Blueprint $table) {
            $table->integer('workout_id')->nullable();
            $table->foreign('workout_id')->references('id')->on('workout');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exercises');
    }
}
