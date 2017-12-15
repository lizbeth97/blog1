@extends('layout')

@section('contenido')
<h1>Contactos</h1>
<h2>Escribeme</h2>
<form method="post" action="contacto">
    <p><label for="nombre">
        Nombre
        <input type="text" name="nombre" value="{{old('nombre')}}">
        {{$errors->first('nombre', '<span class=error>message</span>') }}
    </label></p>
    
    <p><label for="email">
        Email
        <input type="text" name="email" value="{{old('email')}}">
        {{$errors->first('email') }}
        </label></p>
    
    <p><label for="mensaje">
        Mensaje
        <textarea name="mensaje">{{ old('mensaje')}}</textarea>
        {{$errors->first('mensaje') }}
        </label></p>
    
    <input type="submit" value="Enviar">
</form>
@stop