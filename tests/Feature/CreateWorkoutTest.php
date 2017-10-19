<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\Concerns\InteractsWithExceptionHandling;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CreateWorkoutTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    function a_guest_may_not_create_workouts()
    {
        $this->withExceptionHandling();

        $this->get('/workouts/create')
            ->assertRedirect('/login');

        $this->post('/workouts')
            ->assertRedirect('/login');
    }

    /** @test */
    function an_authenticated_user_can_create_new_workouts()
    {
        $this->signIn();

        $workout = make('App\Workout');

        $response = $this->post('/workouts', $workout->toArray());

        $this->get($response->headers->get('Location'))
            ->assertSee($workout->workout_name)
            ->assertSee($workout->description);
    }

    /** @test */
    function a_workout_requires_a_name()
    {
        $this->publishWorkout(['workout_name' => null])
            ->assertSessionHasErrors('workout_name');
    }

    /** @test */
    function a_workout_requires_a_description()
    {
        $this->publishWorkout(['description' => null])
            ->assertSessionHasErrors('description');
    }

    public function publishWorkout($overrides = [])
    {
        $this->withExceptionHandling()->signIn();

        $workout = make('App\Workout', $overrides);

        return $this->post('/workouts', $workout->toArray());
    }
}
