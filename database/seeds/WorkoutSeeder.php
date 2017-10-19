<?php

use App\User;
use App\Workout;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class WorkoutSeeder extends Seeder
{
    public function run()
    {
        $user = User::findOrFail(1);

        $workout1 = [
            'workout_name' => 'Test Workout1',
            'description' => 'A collection of exercises',
            'user_id' => $user->id,
            // 'workout_date' => Carbon::now(),
        ];

        Workout::create($workout1);

        $workout2 = [
            'workout_name' => 'Test Workout2',
            'description' => 'A collection of exercises',
            'user_id' => $user->id,
            // 'workout_date' => Carbon::now(),
        ];

        Workout::create($workout2);

        $workout3 = [
            'workout_name' => 'Test Workout3',
            'description' => 'A collection of exercises',
            'user_id' => $user->id,
            // 'workout_date' => Carbon::now(),
        ];

        Workout::create($workout3);
    }
}
