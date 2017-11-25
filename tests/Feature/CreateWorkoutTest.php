<?php

namespace Tests\Feature;

use App\App\Workout;
use Illuminate\Foundation\Testing\Concerns\InteractsWithExceptionHandling;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CreateWorkoutTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    public function a_guest_may_not_create_workouts()
    {
        $this->withExceptionHandling();

        $this->get('/workout/create')
            ->assertRedirect('/login');

        $this->post('/workout')
            ->assertRedirect('/login');
    }

    /** @test */
    public function an_authenticated_user_can_create_new_workouts()
    {
        $this->signIn();

        $workout = make('App\Workout');

        $response = $this->post('/workout', $workout->toArray());

        $this->get($response->headers->get('Location'))
            ->assertSee('Workout Companion');
    }

    /** @test */
    public function a_workout_requires_a_date()
    {
        $this->publishWorkout(['workout_date' => null])
            ->assertSessionHasErrors('workout_date');
    }

    // /** @test */
    // function a_workout_requires_a_description()
    // {
    //     $this->publishWorkout(['description' => null])
    //         ->assertSessionHasErrors('description');
    // }

    /** @test */
    public function publishWorkout($overrides = [])
    {
        $this->withExceptionHandling()->signIn();

        $workout = make('App\Workout', $overrides);

        return $this->post('/workout', $workout->toArray());
    }

    /** @test */
    public function add_an_exercise_to_a_complex()
    {
        $workout = create('App\Workout');
        $exercise = make('App\Exercise');

        $workout->addExerciseToComplex($exercise);

        $this->assertSame('Deadlift', $workout->complex->exercise_name);
    }
}
