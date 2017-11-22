<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Index Page</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        <div class="container">
        <br/>
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
        <h1>Workouts</h1>
        <a href="{{action('WorkoutController@create')}}" class="btn btn-warning p-8">Add Workout</a>
        <div class="flex">
            @foreach($workouts as $workout)
                <div class="max-w-lg rounded overflow-hidden shadow-lg">
                    <div class="px-8 py-8">
                        <h5><a href="{{ $workout->path() }}">{{ $workout->workout_date }}</a></h5>
                        <h5><a href="#">Athlete's Name: </a>{{ $workout->athlete->name }}</h5>
                        <h5>Count for Work? </a>{{ $workout->count_for_work ? 'Yes' : 'No' }}</h5>
                        <h5>Type of Class: {{ $workout->type_of_class }}</h5>
                        <h5>Color of weight: {{ $workout->color }}</h5>
                        <h5>Prescribed: {{ $workout->prescribed  ? 'Yes' : 'No' }}</h5>
                        <h5>Round 1 Time: {{ $workout->time_of_round_1 }}</h5>
                        <h5>Round 2 Time: {{ $workout->time_of_round_2 }}</h5>
                        <h5>Time to complete Round 1: {{ $workout->time_to_complete_round_1 }}</h5>
                        <h5>Time to complete Round 2: {{ $workout->time_to_complete_round_2 }}</h5>
                    </div>

                    <div class="panel-body">
                    <h1>Exercises:</h1>
                        @foreach ($workout->exercises as $exercise)
                            <h5>{{ $exercise->exercise_name }}</h5>
                            <h5>{{ $exercise->description }}</h5>
                            <h5>{{ $exercise->weights }}</h5>
                            <h5>{{ $exercise->times }}</h5>
                            <h5>{{ $exercise->exercise_date }}</h5>
                        @endforeach
                    </div>
                    <div class="flex">
                        <a href="{{action('WorkoutController@edit', $workout['id'])}}" class="bg-blue hover:bg-blue-dark text-white font-bold py-2 px-4 rounded">Edit</a>
                        <form action="{{action('WorkoutController@destroy', $workout['id'])}}" method="post">
                            {{csrf_field()}}
                        <input name="_method" type="hidden" value="DELETE">
                        <button class="bg-red hover:bg-red-dark text-white font-bold py-2 px-4 rounded" type="submit">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </table>
    </div>
    </body>
</html>
