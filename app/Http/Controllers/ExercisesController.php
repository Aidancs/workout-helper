<?php

namespace App\Http\Controllers;

use App\Exercise;
use App\Workout;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ExercisesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($workoutId = null)
    {
        if ($workoutId) {
            $exercises = Exercise::where('workout_id', $workoutId)->latest()->get();
        } else {
            $exercises = Exercise::latest()->get();
        }

        return view('exercise.index', compact('exercises'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('exercises.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Workout $workout)
    {
        // $this->validate(request(), [
        //     'exercise_name' => 'required',
        //     'description' => 'required',
        //     'weights' => 'required',
        //     'times' => 'required',
        //     'exercise_date' => 'required',
        // ]);

        $workout->addExercise([
            'exercise_name' => request('exercise_name'),
            'description' => request('description'),
            'weights' => request('weights'),
            'times' => request('times'),
            'exercise_date' => request('exercise_date'),
            'workout_id' => request('workout_id'),
        ]);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $exercise = Exercise::find($id);

        if(!$exercise) {
            return response()->json(['message' => 'Exercise does not exist']);
        }

        return response()->json(['data' => $exercise]);
}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $exercise = Exercise::find($id);
        return view('exercise.edit',compact('exercises','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $exercise = Exercise::find($id);
        $this->validate(request(), [
          'exercise_name' => 'required',
          'description' => 'required',
          'weights' => 'required',
          'times' => 'required',
        ]);
        $exercise->exercise_name = $request->get('exercise_name');
        $exercise->description = $request->get('description');
        $exercise->weights = $request->get('weights');
        $exercise->times = $request->get('times');
        $exercise->save();
        return redirect('exercises')->with('success','Exercise has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $exercise = Exercise::find($id);
        $exercise->delete();
        return redirect('exercises')->with('success','Exercise has been  deleted');
    }
}
