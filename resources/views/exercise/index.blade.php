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
        <h1>Exercises</h1>
      <tr>
        <th>Exercise Name</th>
        <th>Description</th>
        <th>Weights</th>
        <th>Times</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach($exercises as $exercise)
      <tr>
        <td>{{$exercise['exercise_name']}}</td>
        <td>{{$exercise['description']}}</td>
        <td>{{$exercise['weights']}}</td>
        <td>{{$exercise['times']}}</td>
        <td><a href="{{action('ExercisesController@edit', $exercise['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('ExercisesController@destroy', $exercise['id'])}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
    <a href="{{action('ExercisesController@create')}}" class="btn btn-warning">Add Exercise</a>
  </div>
  </body>
</html>
