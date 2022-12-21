@php

    $n=0;

@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <title>Laravel primi passi</title>

</head>
<body>

    <div class="container">

        <h1>{{$title}}</h1>
        <a href="/landing">{{$link_text}}</a>

        <h4>Ciclo for</h4>
        <ul>
            @for($i=0; $i <= 5; $i++)
                <li>--> {{$i}}</li>
            @endfor
        </ul>

        <h4>Ciclo while</h4>
        <ul>
            @while ($n < 10)
                <li>{{$n}}</li>
                @php
                    $n++;
                @endphp
            @endwhile
        </ul>

        <h4>If con booleano</h4>
        @if($print_text)
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus nesciunt nam sunt accusantium quos qui voluptatibus magnam esse laboriosam recusandae?</p>
        @else
            <p>TESTO ALTERNATIVO</p>
        @endif

        <h4>Foreach con if</h4>
        <p>Negli array posso utilizzare la condizione con $loop->first o $loop->last per prendere il primo o l'ultimo elemento del ciclo. In questo caso cambio la classe</p>
        <ul>
            @foreach ($names as $name)
                @if ($loop->first)
                    <li class="first">{{$name}}</li>
                @elseif ($loop->last)
                    <li class="last">{{$name}}</li>
                @else
                    <li>{{$name}}</li>
                @endif
            @endforeach
        </ul>

    </div>

</body>
</html>
