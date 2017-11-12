<?php

namespace App\Http\Controllers;

use App\Workout;
use Illuminate\Http\Request;

class WorkoutController extends Controller
{
    /**
     * Create a new ThreadsController instance.
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $workouts = Workout::all();

        return view('workout.index', compact('workouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('workout.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'workout_date' => 'required',
            'description' => 'required',
        ]);

        $workout = Workout::create([
            'workout_date' => request('workout_date'),
            'type_of_class' => request('type_of_class'),
            'rounds' => request('rounds'),
            'sets' => request('sets'),
            'notes' => request('notes'),
            'count_for_work' => request('count_for_work'),
            'color' => request('color'),
            'prescribed' => request('prescribed'),
            'time_to_complete_round' => request('time_to_complete_round'),
            'user_id' => request('user_id'),
        ]);

        return redirect($workout->path());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Workout $workout) {

        return view('workout.show', compact('workout'));
}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $workout = Workout::find($id);
        return view('workout.edit',compact('workout','id'));
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
        $workout = Workout::find($id);
        $this->validate(request(), [
            'workout_date' => 'required',
            'type_of_class' => 'required',
            'rounds' => 'required',
            'sets' => 'required',
            'notes' => 'required',
            'count_for_work' => 'required',
            'color' => 'required',
            'prescribed' => 'required',
            'time_to_complete_round' => 'required',
            'user_id' => 'required',
        ]);
        $workout->workout_date = request('workout_date');
        $workout->type_of_class = request('type_of_class');
        $workout->rounds = request('rounds');
        $workout->sets = request('sets');
        $workout->notes = request('notes');
        $workout->count_for_work = request('count_for_work');
        $workout->color = request('color');
        $workout->prescribed = request('prescribed');
        $workout->time_to_complete_round = request('time_to_complete_round');
        $workout->user_id = request('user_id');
        $workout->save();
        return redirect('workout')->with('success','Workout has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $workout = Workout::find($id);
        $workout->delete();
        return redirect('workout')->with('success','Workout has been  deleted');
    }
}
