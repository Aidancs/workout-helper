<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Edit a Workout</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Edit a Workout</h2><br  />
      <form method="post" action="{{action('WorkoutsController@update', $id)}}">
        {{csrf_field()}}
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="workout_name">Workout Name:</label>
            <input type="text" class="form-control" name="workout_name" value="{{$workout->workout_name}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="description">Description:</label>
              <input type="text" class="form-control" name="description" value="{{$workout->description}}">
            </div>
          </div>
          <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="exercises">Exercises:</label>
            <input type="text" class="form-control" name="exercises" value="{{$workout->exercises}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success" style="margin-left:38px">Update Workout</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
