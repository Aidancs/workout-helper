<!-- create.blade.php -->

<form method="post" action="{{url('workout')}}">

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Add a workout </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Add an workout</h2><br  />
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
            <label for="workout_date">Workout Date:</label>
            <input type="text" class="form-control" name="workout_date">
          </div>
        </div>
        <div class="row">
          <div class="col-md-2"></div>
            <div class="form-group col-md-2">
              <label for="description">Type of Class:</label>
              <input type="body" class="form-control" name="type_of_class">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-2"></div>
          <div class="form-group col-md-2">
            <label for="exercises">Count for Work:</label>
            <input type="text" class="form-control" name="count_for_work">
          </div>
        </div>
        <div class="row">
          <div class="col-md-2"></div>
          <div class="form-group col-md-2">
            <label for="workout_date">Color:</label>
            <input type="text" class="form-control" name="color">
          </div>
        </div>
        <div class="row">
          <div class="col-md-2"></div>
            <div class="form-group col-md-2">
              <label for="description">Prescribed:</label>
              <input type="body" class="form-control" name="prescribed">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-2"></div>
          <div class="form-group col-md-2">
            <label for="exercises">Count for Work:</label>
            <input type="text" class="form-control" name="time_of_round_1">
          </div>
        </div>
        <div class="row">
          <div class="col-md-2"></div>
          <div class="form-group col-md-2">
            <label for="workout_date">Workout Date:</label>
            <input type="text" class="form-control" name="workout_date">
          </div>
        </div>
        <div class="row">
          <div class="col-md-2"></div>
            <div class="form-group col-md-2">
              <label for="description">Type of Class:</label>
              <input type="body" class="form-control" name="type_of_class">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-2"></div>
          <div class="form-group col-md-2">
            <label for="exercises">Count for Work:</label>
            <input type="text" class="form-control" name="count_for_work">
          </div>
        </div>

        <div class="row">
          <div class="col-md-2"></div>
          <div class="form-group col-md-2">
            <button type="submit" class="btn btn-success" style="margin-left:38px padding-left: 4x">Add Workout</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
