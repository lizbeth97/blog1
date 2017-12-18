<?php

//www.misitio.com =Rute:get('/');
//www.misitio.com/contacto= Route:get('contacto', function(){});

Route::get('/', ['as' => 'home', function(){
    return view('home');

//Route::get('/', ['as' => 'home', 'uses' => 'PagesControllers@home'])->middleware('example');


Route::get('contactame', ['as' => 'contactos', 'uses' => 'PagesControllers@contact']);


Route::get('saludos/{nombre?}',['as' => 'saludos', 'uses' => 'PagesControllers@saludo'])->where('nombre', "[A-Za-z]+");


Route::post('contacto','PagesControllers@mensajes');


Route::resource('mensajes', 'MessagesController');

// Route::get('mensajes/create',['as'=>'messages.create', 'uses'=>'MessagesController@create']);

// Route::post('mensajes',['as'=>'messages.store', 'uses'=>'MessagesController@store']);

// Route::get('mensajes',['as'=>'messages.index', 'uses'=>'MessagesController@index']);

// Route::get('mensajes/{id}',['as'=>'messages.show', 'uses'=>'MessagesController@show']);

// Route::get('mensajes/{id}/edit',['as'=>'messages.edit', 'uses'=>'MessagesController@edit']);

// Route::put('mensajes/{id}',['as'=>'messages.update', 'uses'=>'MessagesController@update']);

// Route::delete('mensajes/{id}',['as'=>'messages.destroy', 'uses'=>'MessagesController@destroy']);

?>