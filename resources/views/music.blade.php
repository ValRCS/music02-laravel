<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Music</title>
</head>
<body>
    <h1>My Titles</h1>
    <p>My song  {{ $track->name }}</p>
    <p>My artist {{ $track->artist }}</p>
    <p>My album {{ $track->album }}</p>
    <!-- <p>My debug {{ dd($track) }}</p> -->
<hr>
@foreach
@endforeach
</body>
</html>
