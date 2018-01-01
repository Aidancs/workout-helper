<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

    Route::middleware('auth:api')->get('/user', function (Request $request) {
        return $request->user();
    });

    Route::resource('exercises', 'ExercisesApiController');
    Route::resource('register', 'Auth\RegisterApiController');
    Route::resource('user', 'UserApiController');
    Route::resource('workout', 'WorkoutApiController');

    Route::group(['middleware' => ['auth']], function () {
    });
