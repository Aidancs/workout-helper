<?php

use App\Exercise;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ExerciseSeeder extends Seeder
{
    public function run()
    {
        $exercises = [
            [
                'exercise_name' => 'Bench Press',
                'workout_id' => 3,
                'description' => '',
                'weights' => '175',
                'times' => '',
                'exercise_date' => Carbon::now(),
            ],
            [
                'exercise_name' => 'Back Squat',
                'workout_id' => 3,
                'description' => '',
                'weights' => '135',
                'times' => '',
                'exercise_date' => Carbon::now(),
            ],
            [
                'exercise_name' => 'Front Squat',
                'workout_id' => 3,
                'description' => '3rm',
                'weights' => '180',
                'times' => '',
                'exercise_date' => Carbon::now(),
            ],
            [
                'exercise_name' => 'Deadlift',
                'workout_id' => 2,
                'description' => '',
                'weights' => '205',
                'times' => '',
                'exercise_date' => Carbon::now(),
            ],
            [
                'exercise_name' => '100m Run',
                'workout_id' => 3,
                'description' => '',
                'weights' => '',
                'times' => '1:30',
                'exercise_date' => Carbon::now(),
            ],
            [
                'exercise_name' => '200m Run',
                'workout_id' => 1,
                'description' => '',
                'weights' => '',
                'times' => '2:30',
                'exercise_date' => Carbon::now(),
            ],
            [
                'exercise_name' => 'Russian Kettle Bell Swings',
                'workout_id' => 3,
                'description' => '',
                'weights' => '55lb.',
                'times' => '',
                'exercise_date' => Carbon::now(),
            ],
            [
                'exercise_name' => 'Wallballs',
                'workout_id' => 2,
                'description' => '',
                'weights' => '15lb.',
                'times' => '',
                'exercise_date' => Carbon::now(),
            ],
            [
                'exercise_name' => 'Alternating Dumbell Snatch',
                'workout_id' => 3,
                'description' => '',
                'weights' => '25lb.',
                'times' => '',
                'exercise_date' => Carbon::now(),
            ],
            [
                'exercise_name' => 'Clean',
                'workout_id' => 1,
                'description' => '',
                'weights' => '',
                'times' => '',
                'exercise_date' => Carbon::now(),
            ],
            [
                'exercise_name' => 'Push Press',
                'workout_id' => 3,
                'description' => '',
                'weights' => '',
                'times' => '',
                'exercise_date' => Carbon::now(),
            ],
            [
                'exercise_name' => 'Thruster',
                'workout_id' => 3,
                'description' => '',
                'weights' => '',
                'times' => '',
                'exercise_date' => Carbon::now(),
            ],
            [
                'exercise_name' => '400m Run',
                'workout_id' => 3,
                'description' => '',
                'weights' => '',
                'times' => '',
                'exercise_date' => Carbon::now(),
            ],
            [
                'exercise_name' => 'Ring Row',
                'workout_id' => 3,
                'description' => '',
                'weights' => '',
                'times' => '',
                'exercise_date' => Carbon::now(),
            ],
            [
                'exercise_name' => 'Pull up',
                'workout_id' => 3,
                'description' => '',
                'weights' => '',
                'times' => '',
                'exercise_date' => Carbon::now(),
            ],
            [
                'exercise_name' => 'Burpee',
                'workout_id' => 1,
                'description' => '',
                'weights' => '',
                'times' => '',
                'exercise_date' => Carbon::now(),
            ]
        ];

        foreach ($exercises as $exercise) {
            Exercise::create($exercise);
        }
    }
}
