<?php

namespace App\Http\Controllers;

use App\Http\Resources\WorkoutResource;
use App\Workout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WorkoutApiController extends Controller
{
    public function index()
    {
        return Workout::get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     $exercises = Exercise::all();

    //     return view('workout.create', compact('exercises'));
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $exercises = Exercise::find($request->exercise_select);

        // foreach ($exercises as $exercise) {
        //     $workout->addExercise($exercise);
        // }

        // return new $array_merge($request, [
        //     'workout_date' => 'required',
        //     'notes' => 'required',
        //     'type_of_class' => 'required',
        //     'count_for_work' => 'required',
        //     'prescribed' => 'required',
        //     'athelete' => 'required'
        // ]);

        return Workout::create([
            'workout_date' => request('workout_date'),
            'workout_description' => request('workout_description'),
            'results' => request('results'),
            'workout_type' => request('workout_type'),
            'count_for_work' => request('count_for_work'),
            'prescribed' => request('prescribed'),
            'athlete' => request('athlete'),
        ]);
    }
}
