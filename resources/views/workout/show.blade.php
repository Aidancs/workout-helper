@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="text-align: center">{{ $workout->workout_date }}</div>
                <div class="panel-body" style="text-align: center">
                    {{ $workout->description }}
                </div>
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
                                <td>{{ $exercise->description }}</td>
                                <td>{{ $exercise->weights }}</td>
                                <td>{{ $exercise->times }}</td>
                                <td>{{ $exercise->exercise_date }}</td>
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
                                <label for="times">Times</label>
                                    <input type="text" name="times" id="times" class="form-control"></input>
                                <label for="exercise_date">Exercise date</label>
                                    <input type="text" date="exercise_date" id="exercise_date" class="form-control"></input>
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
