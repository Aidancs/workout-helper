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
                'weight' => '175',
            ],
            [
                'exercise_name' => 'Back Squat',
                'workout_id' => 3,
                'description' => '',
                'weight' => '135',
            ],
            [
                'exercise_name' => 'Front Squat',
                'workout_id' => 3,
                'description' => '3rm',
                'weight' => '180',
            ],
            [
                'exercise_name' => 'Deadlift',
                'workout_id' => 2,
                'description' => '',
                'weight' => '205',
            ],
            [
                'exercise_name' => '100m Run',
                'workout_id' => 3,
                'description' => '',
                'weight' => '',
            ],
            [
                'exercise_name' => '200m Run',
                'workout_id' => 1,
                'description' => '',
                'weight' => '',
            ],
            [
                'exercise_name' => 'Russian Kettle Bell Swings',
                'workout_id' => 3,
                'description' => '',
                'weight' => '55lb.',
            ],
            [
                'exercise_name' => 'Wallballs',
                'workout_id' => 2,
                'description' => '',
                'weight' => '15lb.',
            ],
            [
                'exercise_name' => 'Alternating Dumbell Snatch',
                'workout_id' => 3,
                'description' => '',
                'weight' => '25lb.',
            ],
            [
                'exercise_name' => 'Clean',
                'workout_id' => 1,
                'description' => '',
                'weight' => '',
            ],
            [
                'exercise_name' => 'Push Press',
                'workout_id' => 3,
                'description' => '',
                'weight' => '',
            ],
            [
                'exercise_name' => 'Thruster',
                'workout_id' => 3,
                'description' => '',
                'weight' => '',
            ],
            [
                'exercise_name' => '400m Run',
                'workout_id' => 3,
                'description' => '',
                'weight' => '',
            ],
            [
                'exercise_name' => 'Ring Row',
                'workout_id' => 3,
                'description' => '',
                'weight' => '',
            ],
            [
                'exercise_name' => 'Pull up',
                'workout_id' => 3,
                'description' => '',
                'weight' => '',
            ],
            [
                'exercise_name' => 'Burpee',
                'workout_id' => 1,
                'description' => '',
                'weight' => '',
            ]
        ];

        foreach ($exercises as $exercise) {
            Exercise::create($exercise);
        }
    }
}
