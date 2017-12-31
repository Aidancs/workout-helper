<?php

use Illuminate\Database\Seeder;
use App\Workout;

class WorkoutSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker\Factory::create();

        foreach (range(1, 10) as $index) {
            Workout::create([
                'workout_date' => $faker->date(),
                'workout_description' => $faker->sentence(),
                'results' => $faker->sentence(),
                'workout_type' => true,
                'count_for_work' => true,
                'prescribed' => false,
                'athlete' => $faker->numberBetween($min = 1, $max = 5)
            ]);
        }
    }
}
