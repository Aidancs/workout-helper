<!-- create.blade.php -->

<form method="post" action="{{url('exercises')}}">

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Add an exercise </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Add an exercise</h2><br  />
      @if (\Session::has('success'))
      <div class="alert alert-success">
          <p>{{ \Session::get('success') }}</p>
      </div><br />
      @endif
      <form method="post">
        {{csrf_field()}}
        <div class="row">
          <div class="col-md-2"></div>
          <div class="form-group col-md-2">
            <label for="exercise_name">Exercise Name:</label>
            <input type="text" class="form-control" name="exercise_name">
          </div>
        </div>
        <div class="row">
          <div class="col-md-2"></div>
            <div class="form-group col-md-2">
              <label for="description">Description:</label>
              <input type="body" class="form-control" name="description">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-2"></div>
          <div class="form-group col-md-2">
            <label for="weights">Weights:</label>
            <input type="text" class="form-control" name="weights">
          </div>
        </div>
        <div class="row">
          <div class="col-md-2"></div>
            <div class="form-group col-md-2">
              <label for="times">Times:</label>
              <input type="text" class="form-control" name="times">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-2"></div>
          <div class="form-group col-md-2">
            <button type="submit" class="btn btn-success" style="margin-left:38px padding-left: 4x">Add Exercise</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
