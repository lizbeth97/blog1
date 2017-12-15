<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>home</title>
</head>
<body>
    <!--<h1>Saludos para {{$nombre}}</h1>-->
    
    
<header>
    <nav>
        <a href="<?php echo route('home') ?>">Inicio</a>
        <a href="<?php echo route('saludos', 'Liz') ?>">Saludo</a>
        <a href="<?php echo route('contactos') ?>">contacto</a>
        
    </nav>
</header>

</body>
</html>