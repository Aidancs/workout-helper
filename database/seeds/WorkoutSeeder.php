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
            'workout_date' => '10-16-2016',
            'type_of_class' => 'power',
            'rounds' => 2,
            'sets' => 2,
            'notes' => 'notes',
            'count_for_work' => true,
            'color' => 'grey',
            'prescribed' => false,
            'time_to_complete_round' => 'not timed',
            'user_id' => $user->id,
        ];

        Workout::create($workout1);

        $workout2 = [
            'workout_date' => '10-16-2016',
            'type_of_class' => 'power',
            'rounds' => 2,
            'sets' => 2,
            'notes' => 'notes',
            'count_for_work' => true,
            'color' => 'grey',
            'prescribed' => false,
            'time_to_complete_round' => 'not timed',
            'user_id' => $user->id,
        ];

        Workout::create($workout2);

        $workout3 = [
            'workout_date' => '10-16-2016',
            'type_of_class' => 'power',
            'rounds' => 2,
            'sets' => 2,
            'notes' => 'notes',
            'count_for_work' => true,
            'color' => 'grey',
            'prescribed' => false,
            'time_to_complete_round' => 'not timed',
            'user_id' => $user->id,
        ];

        Workout::create($workout3);
    }
}
