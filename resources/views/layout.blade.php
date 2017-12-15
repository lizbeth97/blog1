<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Untitled Document</title>
</head>
<body>

    <header>
        <nav>
            <a href="<?php echo route('home') ?>">Inicio</a>
            <a href="<?php echo route('saludos', 'Liz') ?>">Saludo</a>
            <a href="<?php echo route('contactos') ?>">contacto</a>

        </nav>
    </header>
    
    @yield('contenido')
    <footer>Copyright ° {{date('Y')}}</footer>

</body>
</html>