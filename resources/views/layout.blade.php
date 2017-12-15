<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Mi sitio</title>
    <style>
        .active{
            text-decoration: none;
            color: green;
        }
    </style>
</head>
<body>

    <header>
        
        <nav>
            <a class="active" href="{{route('home')}}">Inicio</a>
            <a href="{{ route('saludos', 'Liz')}}">Saludo</a>
            <a href="{{route('contactos')}}">Contacto</a>

        </nav>
    </header>
    
    @yield('contenido')
    <footer>Copyright ° {{date('Y')}}</footer>

</body>
</html>