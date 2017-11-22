<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Add a workout </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
        <h2>Add a workout</h2><br  />
        @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div><br />
        @endif
        <div class="container">
            <p>First select the details of the workout. After you will select the exercises.</p>
        </div>

    <form method="POST" action="{{route('workout.store')}}">
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
            <label for="notes">Notes:</label>
            <input type="body" class="form-control" name="notes">
            </div>
        </div>
        <div class="row">
        <div class="col-md-2"></div>
            <div class="form-group col-md-2">
            <label for="type_of_class">Type of Class:</label>
            <input type="text" class="form-control" name="type_of_class">
            </div>
        </div>

        <div class="row">
        <div class="col-md-2"></div>
        <div class="form-group col-md-2">
            <label for="count_for_work">Count for Work:</label>
            <input type="text" class="form-control" name="count_for_work">
        </div>
        </div>
        <div class="row">
        <div class="col-md-2"></div>
            <div class="form-group col-md-2">
            <label for="prescribed">Prescribed:</label>
            <input type="text" class="form-control" name="prescribed">
            </div>
        </div>
        <div class="row">
        <div class="col-md-2"></div>
        <div class="form-group col-md-2">
            <label for="user_id">Athlete:</label>
            <input type="text" class="form-control" name="user_id">
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