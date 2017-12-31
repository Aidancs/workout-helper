<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class WorkoutApiControllerTest extends TestCase
{
    use DatabaseTransactions;

    // public function setUp()
    // {
    //     parent::setUp();

    //     // $this->user = factory(User::class)->create([
    //     //     'timezone' => 'America/Chicago',
    //     // ]);

    //     $this->workout = Workout::create([
    //         'workout_date' => 'Test Date',
    //     ]);
    // }

    /** @test */
    public function testStore()
    {
        //wromg data to be pushed to the database...needs to be updated
    //     $this->post('/api/workout/', [
    //         'workout_date' => 'Test Date',
    //         'notes' => 'Notes for the test workout',
    //         'type_of_class' => true,
    //         'count_for_work' => true,
    //         'prescribed' => false,
    //         'athelete' => 'Me',
    //     ])
    //         ->assertSuccessful()
    //         ->seeInDatabase('workouts', [
    //             'workout_date' => 'Test Date',
    //             'notes' => 'Notes for the test workout',
    //             'type_of_class' => true,
    //             'count_for_work' => true,
    //             'prescribed' => false,
    //             'athelete' => 'Me'
    //         ]);
    // }
}
