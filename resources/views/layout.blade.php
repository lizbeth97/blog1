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
        
        .error{
            color: red;
             font-size: 12px;
        }
    </style>
</head>
<body>

    <header>
        <!--<h1>{{request()->is('/')?'Estas en el home':'No estas en el home'}}</h1>-->
        <?php function activeManu($url){
            return request()->is($url) ?'active' : '';
        }?>
        <nav>
            <a class="{{ activeManu('/') }}" 
               href="{{route('home')}}">Inicio</a>
            
            <a class="{{activeManu('saludos/*')}}" 
               href="{{ route('saludos', 'Liz')}}">Saludo</a>
            
            <a class="{{activeManu('messages.create')}}" 
               href="{{route('mensajes.create')}}">Contacto</a>
            
            <a class="{{activeManu('mensajes')}}" 
               href="{{route('mensajes.index')}}">Mensajes</a>
            

        </nav>
    </header>
    
    @yield('contenido')
    <footer>Copyright ° {{date('Y')}}</footer>

</body>
</html>