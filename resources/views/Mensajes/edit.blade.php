@extends('layout')

@section('contenido')

    <h1>Editar Mensaje</h1>

        <form method="post" action="{{route('mensajes.update', $mensaje->id)}}">

            {!!method_field('PUT')!!}

             @include('mensajes.form',['btntext'=>'Actualizar'])
            
        </form>

@stop