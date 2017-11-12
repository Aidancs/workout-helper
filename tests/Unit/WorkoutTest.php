<?php

namespace Tests\Unit;

use App\Exercise;
use App\User;
use App\Workout;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class WorkoutTest extends TestCase
{
    use DatabaseTransactions;

    protected $workout;

    public function setUp()
    {
        parent::setUp();

        $this->workout = create('App\Workout');
    }

    /** @test */
    function a_workout_has_exercises()
    {
        $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $this->workout->exercises);
    }

    /** @test */
    function a_workout_has_an_athlete()
    {
        $this->assertInstanceOf('App\User', $this->workout->athlete);
    }

    /** @test */
    function a_workout_can_add_an_exercise()
    {
        $this->workout->addExercise([
            'exercise_name' => 'Test Exercise',
            'description' => 'Lorem Ipsum',
            'weights' => '180',
            'times' => '1:30',
        ]);

        $this->assertCount(1, $this->workout->exercises);
    }
}
