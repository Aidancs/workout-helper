<?php

use App\Exercise;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['as' => 'user.'], function () {
    Route::get('/user')
        ->name('index')
        ->uses('UserController@index');

    Route::get('/user')
        ->name('store')
        ->uses('UserController@store');

    Route::get('/user/{user}')
        ->name('update')
        ->uses('UserController@update');

    Route::get('/user/{user}/remove')
        ->name('remove')
        ->uses('UserController@remove');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('workouts', 'WorkoutsController@index')->name('workouts');
// Route::get('workouts/{workout}', 'WorkoutsController@show')->name('workout.show');
    Route::resource('exercises', 'ExercisesController');
    Route::resource('workout', 'WorkoutController');
    Route::post('/workout/{workout}/exercises', 'ExercisesController@store');

