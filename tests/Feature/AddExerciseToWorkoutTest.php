<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class AddExerciseToWorkoutTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    public function unauthenticated_user_cannot_add_an_exercise_to_a_workout()
    {
        $this->withoutExceptionHandling()
            ->expectException('Illuminate\Auth\AuthenticationException');

        $workout = create('App\Workout');

        $exercise = make('App\Exercise');

        $this->post('/workout/' . $workout->id . '/exercises', $exercise->toArray());
    }

    /** @test */
    public function an_authenticated_user_can_add_an_exercise_to_a_workout()
    {
        $this->be($user = create('App\User'));

        $workout = create('App\Workout');

        $exercise = make('App\Exercise');

        $this->post('/workout/' . $workout->id . '/exercises', $exercise->toArray());

        $this->get($workout->path())
            ->assertSee($exercise->exercise_name);
    }
}
