<?php

//www.misitio.com =Rute:get('/');
//www.misitio.com/contacto= Route:get('contacto', function(){});

Route::get('/', ['as' => 'home', function(){
    return view('home');
}]);

Route::get('contactame', ['as' => 'contactos',function(){
	return view('contactos');
}]);

Route::get('saludos/{nombre?}',['as' => 'saludos', function($nombre = "invitado"){
	//return view('saludo', ['nombre' => $nombre]);
    //return view('saludo')->with(['nombre' => $nombre]);
    
    $script="<script>alert('Problema xss- Cross Site Scripting!')</script>";
    $html="<h2>Contenido html</h2>";
    
    $consolas=[
        "Play Station",
        "Xbox",
        "Wii"
    ];
    
    
    return view('saludo', compact('html','nombre', 'script', 'consolas'));
}])->where('nombre', "[A-Za-z]+");