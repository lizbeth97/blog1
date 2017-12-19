<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Mi sitio</title>

    <link rel="stylesheet" href="/css/app.css">

</head>
<body>

    <header>
        <!--<h1>{{request()->is('/')?'Estas en el home':'No estas en el home'}}</h1>-->
        <?php function activeManu($url){
            return request()->is($url) ?'active' : '';
        }?>

        <nav class="navbar navbar-default" role="navigation">

          <div class="container">

            <div class="navbar-header">

              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="navbar-ex1-collapse">

              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"></a>

            </div>

            <div class="collapse navbar-collapse navbar-ex1-collapse">

                <ul class="nav navbar-nav">

                    <li class="{{ activeManu('/') }}">
                      <a href="{{route('home')}}">Inicio</a>
                     </li>
                    
                    <li class="{{activeManu('saludos*')}}">
                      <a href="{{ route('saludos', 'Liz')}}">Saludo</a>
                    </li>

                    <li class="{{activeManu('messages.create')}}">
                      <a href="{{route('mensajes.create')}}">Contacto</a>
                    </li>

                       @if(auth()->check())
                       <li class="{{activeManu('mensajes*')}}">
                         <a href="{{route('mensajes.index')}}">Mensajes</a>
                       </li>
                    
                       @endif
                </ul>

                <ul class="nav navbar-nav navbar-right">

                  <li class="{{activeManu('login')}}">
                    @if(auth()->guest())
                    <a href="/login">Login</a>
                     </li>
                     @else
          
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{auth()->user()->email}} <b class="caret"></b></a>
                      <ul class="dropdown-menu">

                        <li><a href="/logout">Cerrar Sesión</a></li> 
                        
                      </ul>
                  </li> 
                  @endif
                </ul>
            </div>
        </nav>

    </header>
  <div class="container">  
    @yield('contenido')
    <footer>Copyright ° {{date('Y')}}</footer>
  </div>
<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
<script src="{{asset('js/all.js')}}"></script>
</body>
</html>