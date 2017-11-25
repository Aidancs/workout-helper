<!doctype html>
<html lang="en">

<head>
    <title>Workout Companion</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body class="bg-grey-darkest h-screen">
    <h1 class="text-white text-center">Workout Companion</h1>

    <main class="text-white px-6 py-4">
        <p class="text-3xl">Chart your workouts to keep up with your goals. Each workout becomes it's own workout card. Sorting by exercises or weights
            coming soon.</p>
        <div class="px-6 py-4">
            <a class="button bg-indigo-darkest hover:bg-grey text-white font-bold py-2 px-4 rounded-full float-right" href="{{ route('workout.create') }}">
                Create a workout card
            </a>
        </div>
        <p>Example workout cards</p>
        <div class="flex">
            <div class="flex-1 max-w-md px-6 py-4 bg-grey rounded overflow-hidden shadow-lg">
                <img class="w-full" src="img/dumbells.jpg" alt="Dumbells">
                <div class="px-6 py-4">
                    <div class="font-bold text-3xl text-black text-center mb-2">November 12th, 2017</div>
                    <div class="font-bold text-3xl text-black text-center mb-2">Mary Weightlifter</div>
                    <div class="font-bold text-3xl text-black text-center mb-2">Workout color: Grey</div>
                    <div class="font-bold text-3xl text-black text-center mb-2">Prescribed: No</div>
                    <p class="font-bold text-black text-1xl">Part A: 15 min to find 1 RM Power Snatch</p>
                    <p class="font-bold text-black text-1xl">Part B: For Time(8 min cap)</p>
                    <p class="font-bold text-black text-center text-1xl">15-10-5 of</p>
                    <p class="font-bold text-black text-center text-1xl">Power Snatch at 60%</p>
                    <p class="font-bold text-black text-center text-1xl">Clapping Pushups</p>
                    <p class="font-bold text-black text-1xl">Weight for Part A. and time to complete for Part B.</p>
                    <div class="font-bold text-3xl text-black text-center mb-2">Part A: 115#</div>
                    <div class="font-bold text-3xl text-black text-center mb-2">Part B: 6:04</div>
                </div>
            </div>
            <br>
            <div class="flex-1 max-w-md px-6 py-4 bg-grey rounded overflow-hidden shadow-lg">
                <img class="w-full" src="img/overheadsquat.jpg" alt="Dumbells">
                <div class="px-6 py-4">
                    <div class="font-bold text-3xl text-black text-center mb-2">November 12th, 2017</div>
                    <div class="font-bold text-3xl text-black text-center mb-2">Mary Weightlifter</div>
                    <div class="font-bold text-3xl text-black text-center mb-2">Workout color: Grey</div>
                    <div class="font-bold text-3xl text-black text-center mb-2">Prescribed: No</div>
                    <p class="font-bold text-black text-1xl">Part A: 15 min to find 1 RM Power Snatch</p>
                    <p class="font-bold text-black text-1xl">Part B: For Time(8 min cap)</p>
                    <p class="font-bold text-black text-center text-1xl">15-10-5 of</p>
                    <p class="font-bold text-black text-center text-1xl">Power Snatch at 60%</p>
                    <p class="font-bold text-black text-center text-1xl">Clapping Pushups</p>
                    <p class="font-bold text-black text-1xl">Weight for Part A. and time to complete for Part B.</p>
                    <div class="font-bold text-3xl text-black text-center mb-2">Part A: 115#</div>
                    <div class="font-bold text-3xl text-black text-center mb-2">Part B: 6:04</div>
                </div>
            </div>
            <br>
            <div class="flex-1 max-w-md px-6 py-4 bg-grey rounded overflow-hidden shadow-lg">
                <img class="w-full" src="img/backsquat.jpg" alt="Dumbells">
                <div class="px-6 py-4">
                    <div class="font-bold text-3xl text-black text-center mb-2">November 12th, 2017</div>
                    <div class="font-bold text-3xl text-black text-center mb-2">Mary Weightlifter</div>
                    <div class="font-bold text-3xl text-black text-center mb-2">Workout color: Grey</div>
                    <div class="font-bold text-3xl text-black text-center mb-2">Prescribed: No</div>
                    <p class="font-bold text-black text-1xl">Part A: 15 min to find 1 RM Power Snatch</p>
                    <p class="font-bold text-black text-1xl">Part B: For Time(8 min cap)</p>
                    <p class="font-bold text-black text-center text-1xl">15-10-5 of</p>
                    <p class="font-bold text-black text-center text-1xl">Power Snatch at 60%</p>
                    <p class="font-bold text-black text-center text-1xl">Clapping Pushups</p>
                    <p class="font-bold text-black text-1xl">Weight for Part A. and time to complete for Part B.</p>
                    <div class="font-bold text-3xl text-black text-center mb-2">Part A: 115#</div>
                    <div class="font-bold text-3xl text-black text-center mb-2">Part B: 6:04</div>
                </div>
            </div>
            <br>
            <div class="flex-1 max-w-md px-6 py-4 bg-grey rounded overflow-hidden shadow-lg">
                <img class="w-full" src="img/dumbells.jpg" alt="Dumbells">
                <div class="px-6 py-4">
                    <div class="font-bold text-3xl text-black text-center mb-2">November 12th, 2017</div>
                    <div class="font-bold text-3xl text-black text-center mb-2">Mary Weightlifter</div>
                    <div class="font-bold text-3xl text-black text-center mb-2">Workout color: Grey</div>
                    <div class="font-bold text-3xl text-black text-center mb-2">Prescribed: No</div>
                    <p class="font-bold text-black text-1xl">Part A: 15 min to find 1 RM Power Snatch</p>
                    <p class="font-bold text-black text-1xl">Part B: For Time(8 min cap)</p>
                    <p class="font-bold text-black text-center text-1xl">15-10-5 of</p>
                    <p class="font-bold text-black text-center text-1xl">Power Snatch at 60%</p>
                    <p class="font-bold text-black text-center text-1xl">Clapping Pushups</p>
                    <p class="font-bold text-black text-1xl">Weight for Part A. and time to complete for Part B.</p>
                    <div class="font-bold text-3xl text-black text-center mb-2">Part A: 115#</div>
                    <div class="font-bold text-3xl text-black text-center mb-2">Part B: 6:04</div>
                </div>
            </div>
        </div>
        <!-- <p>
          Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
          labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea
          rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor
          sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
          aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd
          gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur
          sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
          voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
          takimata sanctus est Lorem ipsum dolor sit amet.
        </p>
        <h2>More content</h2>
        <p>
          Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore
          eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum
          zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer
          dipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
        </p>
        <h3>Deeper information</h3>
        <p>
          Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip
          ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie
          consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim
          qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
        </p>
        <h2>Finally</h2>
        <p>
          Ora et labora, pero sin ora. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip
          ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie
          consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim
          qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
        </p> -->
    </main>
    <footer>
        <div>
            <img src="" alt="">
        </div>
        <div>
            <h2></h2>

        </div>
    </footer>
</body>

</html>
