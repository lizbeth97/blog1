<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Saludo</title>
</head>
<body>

<h1>Saludos para {{$nombre}}</h1>
    {!!$html!!}
    {!!$script!!}
    
    <ul>
        @forelse($consolas as $consola)
        <li>{{$consola}}</li>
        @empty
        <p>No hay consolas </p>
        @endforelse
    </ul>
    @if(count($consolas)==1)
    <p>Solo tienes una consola</p>
    @elseif(count($consolas) > 1)
    <p>tienes varias consolas</p>
    @else
    <p>no tienes consolas</p>
    @endif
    <header>
    <nav>
        <a href="<?php echo route('home') ?>">Inicio</a>
        <a href="<?php echo route('saludos', 'Liz') ?>">Saludo</a>
        <a href="<?php echo route('contactos') ?>">contacto</a>
        
    </nav>
</header>
    
</body>
</html>