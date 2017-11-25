@extends('layouts.app')

@section('content')
<!-- <div class="flex">
            <div class="flex-1 max-w-md px-6 py-4 bg-grey rounded overflow-hidden shadow-lg">
                <img class="w-full" src="img/dumbells.jpg" alt="Dumbells">
                <div class="px-6 py-4">
                    <div class="font-bold text-3xl text-black text-center mb-2">November 12th, 2017</div>
                    <div class="font-bold text-3xl text-black text-center mb-2">Mary Weightlifter</div>
                    <div class="font-bold text-3xl text-black text-center mb-2">Workout color: Grey</div>
                    <div class="font-bold text-3xl text-black text-center mb-2">Prescribed: No</div>
                    <p class="font-bold text-black text-1xl">Part A: 15 min to find 1 RM Power Snatch</p>
                    <p class="font-bold text-black text-1xl">Part B: For Time(8 min cap)</p>
                    <p class="font-bold text-black text-center text-1xl">15-10-5 of</p>
                    <p class="font-bold text-black text-center text-1xl">Power Snatch at 60%</p>
                    <p class="font-bold text-black text-center text-1xl">Clapping Pushups</p>
                    <p class="font-bold text-black text-1xl">Weight for Part A. and time to complete for Part B.</p>
                    <div class="font-bold text-3xl text-black text-center mb-2">Part A: 115#</div>
                    <div class="font-bold text-3xl text-black text-center mb-2">Part B: 6:04</div>
                </div>
            </div> -->
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="text-align: center">Workout Date: {{ $workout->workout_date }}</div>
                <div class="panel-heading" style="text-align: center">Notes: {{ $workout->notes }}</div>
                <div class="panel-heading" style="text-align: center">Type of Class: {{ $workout->type_of_class ? 'Push' : 'Power' }}</div>
                <div class="panel-heading" style="text-align: center">Count for Work: {{ $workout->count_for_work ? 'Yes' : 'No' }}</div>
                <div class="panel-heading" style="text-align: center">Prescribed: {{ $workout->prescribed ? 'Yes' : 'No' }}</div>
                <div class="panel-heading" style="text-align: center">Athlete: {{ $workout->athlete->name }}</div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="text-align: center">
                    Exercises
                </div>
                <table class="table table-striped">
                    <tbody>
                        @foreach ($workout->exercises as $exercise)
                            <tr>
                                <td><a href="/exercises/">{{ $exercise->exercise_name }}</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @if (auth()->check())
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" style="text-align: center">
                        <form method="POST" action="{{ $workout->path() . '/exercises'}}">
                            {{ csrf_field() }}
                            <label for="exercise">Add an Exercise</label>
                            <div class="form-group">
                                <label for="exercise_name">Exercise Name</label>
                                    <input type="text" name="exercise_name" id="exercise_name" class="form-control"></input>
                                <label for="description">Description</label>
                                    <textarea name="description" id="description" class="form-control"></textarea>
                                <label for="weights">Weights</label>
                                    <input type="text" name="weights" id="weights" class="form-control"></input>
                            </div>
                            <button type="submt" class="btn-btn-default">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @else
        <p class="text-center">Please <a href="{{ route('login') }}">sign in</a> to add an exercise.</p>
    @endif
</div>
@endsection
