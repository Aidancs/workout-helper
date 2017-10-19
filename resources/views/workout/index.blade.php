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
        <th>Workout Name</th>
        <th>Description</th>
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
            <a href="{{ $workout->path() }}">{{ $workout->workout_name }}</a>
        </td>
        <td>{{ $workout->description }}</td>
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
        <td><a href="{{action('WorkoutsController@edit', $workout['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('WorkoutsController@destroy', $workout['id'])}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
    <a href="{{action('WorkoutsController@create')}}" class="btn btn-warning">Add Workout</a>
  </div>
  </body>
</html>
