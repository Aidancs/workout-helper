<?php

namespace App\Http\Controllers;

use App\Workout;
use Illuminate\Http\Request;

class WorkoutsController extends Controller
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
        $workouts = Workout::latest()->get();
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
            'workout_name' => 'required',
            'description' => 'required',
        ]);

        $workout = Workout::create([
            'workout_name' => request('workout_name'),
            'description' => request('description'),
            'user_id' => auth()->id(),
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
          'workout_name' => 'required',
          'description' => 'required',
        ]);
        $workout->workout_name = $request->get('workout_name');
        $workout->description = $request->get('description');
        $workout->save();
        return redirect('workouts')->with('success','Workout has been updated');
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
        return redirect('workouts')->with('success','Workout has been  deleted');
    }
}
