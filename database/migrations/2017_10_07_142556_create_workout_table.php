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
            $table->text('notes');
            $table->boolean('type_of_class')->nullable; // 0 = false = push or 1 true = power
            $table->boolean('count_for_work')->nullable; // 0 = false 1 = true
            $table->boolean('prescribed')->nullable; // 0 = false 1 = true
            $table->integer('user_id')->nullable;
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
