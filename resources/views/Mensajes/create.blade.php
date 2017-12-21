

@extends('layout')

@section('contenido')
<h1>Contactos</h1>
<h2>Escribeme</h2>

@if(session()->has('info'))
<h3>{{session('info')}}</h3>

@else
<form method="post" action="{{route('mensajes.store')}}">
    @include('mensajes.form', ['mensaje'=> new App\Message])
</form>
@endif


@stop