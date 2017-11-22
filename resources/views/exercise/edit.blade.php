<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Edit an Exercise</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Edit An Exercise</h2><br  />
      <form method="post" action="{{action('ExercisesController@update', $exercise)}}">
        {{csrf_field()}}
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="exercise_name">Exercise Name:</label>
            <input type="text" class="form-control" name="exercise_name" value="{{$exercise->exercise_name}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="description">Description:</label>
              <input type="text" class="form-control" name="description" value="{{$exercise->description}}">
            </div>
          </div>
          <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="weights">Weights:</label>
            <input type="text" class="form-control" name="weights" value="{{$exercise->weights}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="times">Times:</label>
              <input type="text" class="form-control" name="times" value="{{$exercise->times}}">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success" style="margin-left:38px">Update Exercise</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
