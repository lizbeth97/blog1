@extends('layout')

@section('contenido')

	<a class="btn btn-success pull-right" href="{{route('usuarios.create')}}">Crear nuevo usuario</a>
	<h1>Usuarios</h1>
	<table class="table">
		<thead>
	            <tr>
	                <th>id</th>
	                <th>Nombre</th>
	                <th>Email</th>
	                <th>Rol</th>
	                <th>Notas</th>
	                <th>Etiquetas</th>
	                <th>Accion</th>
	            </tr>
	        </thead>
	        <tbody>
	           @foreach($users as $user)
	           <tr>
	           	<td>{{$user->id}}</td>
	           	<td>{{$user->name}}</td>
	           	<td>{{$user->email}}</td>
	           	<td>
	           		{{$user->roles->pluck('display_name')->implode(', ')}}
	           	</td>
	           	<td>
	           		{{optional($user->note)->body}}
	           	</td>

	           	<td>
                       {{optional($user->tags)->pluck('name')->implode(', ')}} 
                    </td>

	           	<td>
	           		<a class="btn btn-info btn-xs" 
	           		href="{{route('usuarios.edit', $user->id)}}">Editar</a>
	           		
	           		<form style="display: inline" 
		           		method="POST" 
		           		action="{{route('usuarios.destroy', $user->id)}}">
	           			{!!csrf_field()!!}
	           			{!! method_field('DELETE')!!}

	           			<button class="btn btn-danger btn-xs" type="submit">Eliminar</button>
	           			
	           		</form>
	           	</td>
	           </tr>
	           @endforeach
	        </tbody>
    </table>
@stop