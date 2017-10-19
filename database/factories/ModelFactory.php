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
        'workout_name' => $faker->sentence,
        'description'  => $faker->paragraph,
        'user_id' => function () {
            return factory('App\User')->create()->id;
        },
    ];
});

$factory->define(App\Exercise::class, function ($faker) {

    return [
        'exercise_name' => $faker->sentence,
        'description'  => $faker->paragraph,
        'weights'  => $faker->paragraph,
        'times'  => $faker->paragraph,
        'exercise_date' => $faker->date,
        'workout_id' => function () {
            return factory('App\Workout')->create()->id;
        },
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
