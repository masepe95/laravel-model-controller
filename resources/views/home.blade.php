<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Movies</title>
    @vite('resources/js/app.js')
</head>

<body>
    <div class="container">

        <h1 class="text-center mt-3">MOVIES LIST</h1>
        <ul>


            @forelse ($movies as $movie)
            <li>{{ $movie->title }}</li>
            @empty
            <h3>NOT FOUND</h3>
            @endforelse
        </ul>
    </div>
</body>

</html>