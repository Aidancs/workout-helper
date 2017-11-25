<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'height' => '5\'7"',
        'weight' => '223',
        'age' => 39,
        'remember_token' => str_random(10),
    ];
});

$factory->state(App\User::class, 'unconfirmed', function () {
    return [
        'confirmed' => false
    ];
});

$factory->define(App\Workout::class, function ($faker) {
    return [
        'workout_date' => 'Workout Date',
        'type_of_class' => true,
        'notes' => 'AMRAP',
        'count_for_work' => true,
        'prescribed' => false,
        'user_id' => function () {
            return factory('App\User')->create()->id;
        },
    ];
});

$factory->define(App\Exercise::class, function ($faker) {
    return [
        'exercise_name' => 'Deadlift',
        'description' => '3Rm',
        'weights' => '275 lb',
    ];
});

// from the laracasts forum example
// $factory->state(App\User::class, 'administrator', function () {
//     return [
//         'name' => 'JohnDoe'
//     ];
// });

// $factory->define(App\Channel::class, function ($faker) {
//     $name = $faker->word;

//     return [
//         'name' => $name,
//         'slug' => $name
//     ];
// });

// $factory->define(\Illuminate\Notifications\DatabaseNotification::class, function ($faker) {
//     return [
//         'id' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
//         'type' => 'App\Notifications\ThreadWasUpdated',
//         'notifiable_id' => function () {
//             return auth()->id() ?: factory('App\User')->create()->id;
//         },
//         'notifiable_type' => 'App\User',
//         'data' => ['foo' => 'bar']
//     ];
// });
