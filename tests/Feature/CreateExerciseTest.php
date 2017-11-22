<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\Concerns\InteractsWithExceptionHandling;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CreateExerciseTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    public function a_guest_may_not_create_exercises()
    {
        $this->withExceptionHandling();

        $this->get('/exercises/create')
            ->assertRedirect('/login');

        $this->post('/workout')
            ->assertRedirect('/login');
    }

    /** @test */
    public function an_authenticated_user_can_create_new_exercises()
    {
        $this->signIn();

        $exercise = make('App\Exercise');

        $response = $this->post('/exercise', $exercise->toArray());

        $this->get($response->headers->get('Location'))
            ->assertSee('Workout Companion');
    }

    /** @test */
    // public function a_exercise_requires_a_date()
    // {
    //     $this->publishExercise(['exercise_date' => null])
    //         ->assertSessionHasErrors('exercise_date');
    // }

    // /** @test */
    // function a_workout_requires_a_description()
    // {
    //     $this->publishWorkout(['description' => null])
    //         ->assertSessionHasErrors('description');
    // }

    public function publishExercise($overrides = [])
    {
        $this->withExceptionHandling()->signIn();

        $exercise = make('App\Exercise', $overrides);

        return $this->post('/exercise', $exercise->toArray());
    }
}
