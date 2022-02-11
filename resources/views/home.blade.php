<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>
</head>
<body>
    <h1>Movies</h1>
    <ul>
        @foreach ($movies as $movie)
        <li>
            <h2>{{$movie->title}}</h2>
            <h3>Titolo originale: {{$movie->original_title}}</h3>
            <p>Produzione: {{$movie->nationality}}</p>
            <p>Data di uscita: {{$movie->date}}</p>
            <p>Voto: {{$movie->vote}}</p>
        </li>
        @endforeach
    </ul>
</body>
</html>