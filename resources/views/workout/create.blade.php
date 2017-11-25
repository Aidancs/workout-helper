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
            <h4>Here is where you will tailor your workout</h4>
            <p>First select the details of the workout. After you select the details you will select the exercises.</p>
        </div>
    <form method="POST" action="{{route('workout.store')}}">
        {{csrf_field()}}
        <div class="flex">
            <div class="flex-1 max-w-lg px-6 py-4 bg-grey rounded overflow-hidden shadow-lg">
                <div class="px-6 py-4">
                    <div class="row">
                        <div class="col-lg-2"></div>
                        <div class="form-group col-lg-6">
                            <label for="workout_date">Workout Date:</label>
                            <input type="text" class="form-control" name="workout_date">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2"></div>
                        <div class="form-group col-lg-6">
                            <label for="number_of_rounds">Number of Rounds:</label>
                            <input type="number" class="form-control" name="number_of_rounds">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4"></div>
                    <div class="form-group col-lg-4">

                </div>
            </div>
        </div>

            <div class="flex-1 max-w-lg px-6 py-4 bg-grey rounded overflow-hidden shadow-lg">
                <div class="px-6 py-4">

            <div class="row">
            <div class="col-lg-4"></div>
                <div class="form-group col-lg-8">
                <label for="notes">Notes:</label>
                <textarea type="body" class="form-control" name="notes"></textarea>
                </div>
            </div>
            <div class="row">
            <div class="col-lg-4"></div>
                <div class="form-group col-lg-4">
                <label for="type_of_class">Type of Class:</label>
                <input type="text" class="form-control" name="type_of_class">
                </div>
            </div>

            <div class="row">
            <div class="col-lg-4"></div>
            <div class="form-group col-lg-4">
                <label for="count_for_work">Count for Work:</label>
                <input type="text" class="form-control" name="count_for_work">
            </div>
            </div>

            <div class="row">
            <div class="col-lg-4"></div>
                <div class="form-group col-lg-4">
                <label for="prescribed">Prescribed:</label>
                <input type="text" class="form-control" name="prescribed">
                </div>
            </div>
                </div>
            </div>
            <div class="flex-1 max-w-lg px-6 py-4 bg-grey rounded overflow-hidden shadow-lg">
                <div class="px-6 py-4">
                    <h4 class="text-center text-black">Exercises</h4>
                    <div class="row">
                        @foreach ($exercises as $exercise)
                            <div class="flex-1 max-w-lg px-6 py-4 bg-grey-light rounded overflow-hidden shadow-lg">
                               <input type="checkbox" name="exercise_select[]" value="{{ $exercise->id }}">{{ $exercise->exercise_name }}</option>
                             </div>
                        @endforeach
                    </div>
                <div class="row">
                    <div class="col-lg-4"></div>
                    <div class="form-group col-lg-4">
                        <button type="submit" class="btn btn-success" style="margin-left:38px padding-left: 4x">Add Workout</button>
                    </div>
                </div>
        </form>
            </div>
        </div>
    </div>
    </div>
  </body>
</html>