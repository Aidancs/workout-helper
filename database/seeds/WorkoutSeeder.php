<?php

use App\User;
use App\Workout;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class WorkoutSeeder extends Seeder
{
    public function run()
    {
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
            'user_id' => 1,
        ];

        Workout::create($workout1);

        $workout2 = [
            'workout_date' => '10-12-2016',
            'type_of_class' => 'power',
            'rounds' => 2,
            'sets' => 2,
            'notes' => 'notes',
            'count_for_work' => true,
            'color' => 'grey',
            'prescribed' => false,
            'time_to_complete_round' => 'not timed',
            'user_id' => 2,
        ];

        Workout::create($workout2);

        $workout3 = [
            'workout_date' => '10-18-2016',
            'type_of_class' => 'power',
            'rounds' => 2,
            'sets' => 2,
            'notes' => 'notes',
            'count_for_work' => true,
            'color' => 'grey',
            'prescribed' => false,
            'time_to_complete_round' => 'not timed',
            'user_id' => 3,
        ];

        Workout::create($workout3);

        $workout4 = [
            'workout_date' => '11-13-2016',
            'type_of_class' => 'power',
            'rounds' => 2,
            'sets' => 0,
            'notes' => 'A. 15 min 1RM Power Snatch. B. For Time(8 min cap) 15-10-5 Power Snatch at 60%, Clapping push ups',
            'count_for_work' => true,
            'color' => 'grey',
            'prescribed' => false,
            'time_to_complete_round' => '6:04',
            'user_id' => 3,
        ];

        Workout::create($workout4);

        $workout5 = [
            'workout_date' => '10-18-2016',
            'type_of_class' => 'power',
            'rounds' => 4,
            'sets' => 0,
            'notes' => 'For Time(22 min cap). 10 Push Press. 10 Bent Over Rows. 400m Run. 1 min Rest.',
            'count_for_work' => true,
            'color' => 'grey',
            'prescribed' => true,
            'time_to_complete_round' => '20:57',
            'user_id' => 3,
        ];

        Workout::create($workout5);
    }
}
