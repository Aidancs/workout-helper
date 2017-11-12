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
            $table->string('type_of_class'); // push or power
            $table->integer('rounds');
            $table->integer('sets');
            $table->string('notes');
            $table->boolean('count_for_work');
            $table->string('color');
            $table->boolean('prescribed');
            $table->string('time_to_complete_round');
            $table->integer('user_id');
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
        Schema::dropIfExists('workout');
    }
}
