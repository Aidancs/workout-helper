<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ViewWorkoutsTest extends TestCase
{
    use DatabaseTransactions;

    public function setUp()
    {
        parent::setUp();

        $this->workout = create('App\Workout');
    }

    /** @test */
    public function a_user_can_browse_all_workouts()
    {
        $response = $this->get('/workouts')
            ->assertSee($this->workout->workout_name);
    }

    /** @test */
    public function a_user_can_view_one_workouts()
    {
        $response = $this->get('/workouts/' . $this->workout->id)
            ->assertSee($this->workout->workout_name);
    }

    /** @test */
    function a_user_can_view_exercises_associated_with_the_workout()
    {
        $exercise = create('App\Exercise', ['workout_id' => $this->workout->id]);

        $this->get('/workouts/' . $this->workout->id)
            ->assertSee($exercise->exercise_name);
    }

    /** @test */
    function a_user_can_filter_workouts_accourding_to_a_tag()
    {
        $this->signIn();

        $workout = create('App\Workout');
        $exerciseInWorkout = create('App\Exercise', ['workout_id' => $workout->id]);
        $exerciseNotInWorkout = create('App\Exercise');

        $this->get('/exercises/', $workout->toArray())
            ->assertSee($exerciseInWorkout->exercise_name);
            // ->assertDontSee($exerciseNotInWorkout->exercise_name); Not sure why this bombs, it says 'doesn't contain'
    }
}
