<?php

namespace Tests\Unit;

use App\Exercise;
use App\Workout;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class ExerciseTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    function it_has_an_owner()
    {
        $exercise = create('App\Exercise');

        $this->assertInstanceOf('App\Workout', $exercise->workout);
    }
}
