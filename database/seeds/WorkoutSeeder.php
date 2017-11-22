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
            'notes' => 'Notes for the workout',
            'type_of_class' => true,
            'count_for_work' => true,
            'prescribed' => false,
            'user_id' => 1,
        ];

        Workout::create($workout1);

        $workout2 = [
            'workout_date' => '10-12-2016',
            'notes' => 'notes',
            'type_of_class' => true,
            'count_for_work' => true,
            'prescribed' => false,
            'user_id' => 2,
        ];

        Workout::create($workout2);

        $workout3 = [
            'workout_date' => '10-12-2016',
            'notes' => 'notes',
            'type_of_class' => true,
            'count_for_work' => true,
            'prescribed' => false,
            'user_id' => 2,
        ];

        Workout::create($workout3);

        $workout4 = [
            'workout_date' => '11-13-2016',
            'notes' => 'A. 15 min 1RM Power Snatch. B. For Time(8 min cap) 15-10-5 Power Snatch at 60%, Clapping push ups',
            'type_of_class' => true,
            'count_for_work' => true,
            'prescribed' => false,
            'user_id' => 3,
        ];

        Workout::create($workout4);

        $workout5 = [
            'workout_date' => '11-18-2016',
            'notes' => 'For Time(22 min cap). 10 Push Press. 10 Bent Over Rows. 400m Run. 1 min Rest.',
            'type_of_class' => true,
            'count_for_work' => true,
            'prescribed' => true,
            'user_id' => 3,
        ];

        Workout::create($workout5);

        $workout6 = [
            'workout_date' => '11-20-2016',
            'notes' => 'For Time(21 min cap). 1st rd 5x (3 Power Clean, 1 Jerk, 1 Split Jerk complex.) 500m Row 2nd rd 4x (3 Power Clean, 1 Jerk, 1 Split Jerk complex.) 500m Row 3rd rd 3x (3 Power Clean, 1 Jerk, 1 Split Jerk complex.) 500m Row',
            'type_of_class' => true,
            'count_for_work' => true,
            'prescribed' => true,
            'user_id' => 3,
        ];

        Workout::create($workout6);
    }
}
