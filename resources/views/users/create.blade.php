@extends('layout')

@section('contenido')

	<h1>Crear un nuevo usuario</h1>

	<form method="post" action="{{route('usuarios.store')}}">
            

                 @include('users.form', ['user'=>new App\User])
                

            <input class="btn btn-primary" type="submit" value="Guardar">
        </form>

@stop