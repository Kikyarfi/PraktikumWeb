<!-- resources/views/quran/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemon App</title>
</head>
<body>
    <h1>Pokemon App</h1>

    <ul style="list-style: none">
        @foreach($pokemons['results']  as $i => $pokemon)
       
            <li style="list-style: none">
                <a href="{{ url('/detail_pokemon/' . ($i + 1)) }}">
                    {{-- https://pokeapi.co/api/v2/pokemon/{{$i+1}}/ --}}
                    {{$i+1}} : {{ $pokemon['name']}}
                </a>
            </li>
        @endforeach
    </ul>
</body>
</html>
