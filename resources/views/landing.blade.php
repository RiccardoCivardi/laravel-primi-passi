@php

    $nome = 'Riccardo';
    $cognome = 'Civardi';

    // var_dump($team_members);

@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <title>Landing - Laravel primi passi</title>

</head>
<body>

    <div class="container">

        <h1>{{$title}}</h1>
        <h3>Questa è una prova di {{$nome}} {{$cognome}} con variabili dichiarate nello stesso file e non nelle routes</h3>
        <a href="/">{{$link_text}}</a>

        <div>
            <h4>Foreach di un oggetto generato da una classe</h4>
            @foreach ($team_members as $member)
                <div class="card">
                    <h4>{{$member->name}}</h4>
                    <h4>{{$member->surname}}</h4>
                    <h5>{{$member->age}}</h5>
                </div>
            @endforeach
        </div>

    </div>

</body>
</html>
