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
    @foreach ($track as $key=>$value)
        <p>This {{$key}} has value: {{$value}}</p>
    @endforeach
    <hr>
@php
    var_dump($track);
    echo "<hr>";
    foreach ($track as $key=>$value) {
        echo "Key $key Value: $value";
    }
@endphp
    <p>Hmmm

</p>
<hr>

</body>
</html>
