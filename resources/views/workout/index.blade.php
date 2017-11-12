<!-- index.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
        <h1>Workouts</h1>
      <tr>
        <th>Athlete</th>
        <th>Workout Date</th>
        <th>Type of Class</th>
        <th>Count for Work</th>
        <th>Color</th>
        <th>Prescribed</th>
        <th>Time for Round 1</th>
        <th>Time for Round 2</th>
        <th>Time to Complete Round 1</th>
        <th>Time to Complete Round 2</th>
        <th>Athlete</th>
        <th>
            <ul>Exercises</ul>
            <ul>Exercise Name Description Weights Times Exercise Date</ul>
        </th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach($workouts as $workout)
      <tr>
        <td>
            <a href="#">{{ $workout->athlete->name }}</a>
        </td>
        <td>
            <a href="{{ $workout->path() }}">{{ $workout->workout_date }}</a>
        </td>
        <td>{{ $workout->type_of_class }}</td>
        <td>{{ $workout->count_for_work ? 'Yes' : 'No' }}</td>
        <td>{{ $workout->color }}</td>
        <td>{{ $workout->prescribed }}</td>
        <td>{{ $workout->time_of_round_1 }}</td>
        <td>{{ $workout->time_of_round_2 }}</td>
        <td>{{ $workout->time_to_complete_round_1 }}</td>
        <td>{{ $workout->time_to_complete_round_2 }}</td>
        <td>{{ $workout->athlete->name }}</td>
        <td>
            @foreach ($workout->exercises as $exercise)
                <div class="panel-body">
                    {{ $exercise->exercise_name }}
                    {{ $exercise->description }}
                    {{ $exercise->weights }}
                    {{ $exercise->times }}
                    {{ $exercise->exercise_date }}
                </div>
            @endforeach
        </td>
        <td><a href="{{action('WorkoutController@edit', $workout['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('WorkoutController@destroy', $workout['id'])}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
    <a href="{{action('WorkoutController@create')}}" class="btn btn-warning">Add Workout</a>
  </div>
  </body>
</html>
