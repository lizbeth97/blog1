<?php

//www.misitio.com =Rute:get('/');
//www.misitio.com/contacto= Route:get('contacto', function(){});

//Route::get('/', ['as' => 'home', function(){
//    return view('home');
//

Route::get('/', ['as' => 'home', 'uses' => 'PagesControllers@home']);


Route::get('contactame', ['as' => 'contactos', 'uses' => 'PagesControllers@contact']);


Route::get('saludos/{nombre?}',['as' => 'saludos', 'uses' => 'PagesControllers@saludo'])->where('nombre', "[A-Za-z]+");

Route::post('contacto','PagesControllers@mensajes');