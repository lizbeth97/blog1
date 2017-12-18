<?php

//www.misitio.com =Rute:get('/');
//www.misitio.com/contacto= Route:get('contacto', function(){});

/*Route::get('/', ['as' => 'home', function(){
   return view('home');
}]);*/

Route::get('/', ['as' => 'home', 'uses' => 'PagesControllers@home']);

Route::get('saludos/{nombre?}',['as' => 'saludos', 'uses' => 'PagesControllers@saludo'])->where('nombre', "[A-Za-z]+");

Route::resource('mensajes', 'MessagesController');

Route::get('login', 'Auth\LoginController@showLoginForm')-> name('login');

Route::post('login', ['as'=>'login','uses'=> 'Auth\LoginController@login']);

Route::get('logout', 'Auth\LoginController@logout');

