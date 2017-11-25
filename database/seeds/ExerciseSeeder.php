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
                'description' => '',
                'weight' => '175',
            ],
            [
                'exercise_name' => 'Back Squat',
                'description' => '',
                'weight' => '135',
            ],
            [
                'exercise_name' => 'Front Squat',
                'description' => '3rm',
                'weight' => '180',
            ],
            [
                'exercise_name' => 'Deadlift',
                'description' => '',
                'weight' => '205',
            ],
            [
                'exercise_name' => '100m Run',
                'description' => '',
                'weight' => '',
            ],
            [
                'exercise_name' => '200m Run',
                'description' => '',
                'weight' => '',
            ],
            [
                'exercise_name' => 'Russian Kettle Bell Swings',
                'description' => '',
                'weight' => '55lb.',
            ],
            [
                'exercise_name' => 'Wallballs',
                'description' => '',
                'weight' => '15lb.',
            ],
            [
                'exercise_name' => 'Alternating Dumbell Snatch',
                'description' => '',
                'weight' => '25lb.',
            ],
            [
                'exercise_name' => 'Clean',
                'description' => '',
                'weight' => '',
            ],
            [
                'exercise_name' => 'Push Press',
                'description' => '',
                'weight' => '',
            ],
            [
                'exercise_name' => 'Thruster',
                'description' => '',
                'weight' => '',
            ],
            [
                'exercise_name' => '400m Run',
                'description' => '',
                'weight' => '',
            ],
            [
                'exercise_name' => 'Ring Row',
                'description' => '',
                'weight' => '',
            ],
            [
                'exercise_name' => 'Pull up',
                'description' => '',
                'weight' => '',
            ],
            [
                'exercise_name' => 'Burpee',
                'description' => '',
                'weight' => '',
            ]
        ];

        foreach ($exercises as $exercise) {
            Exercise::create($exercise);
        }
    }
}
