@extends('layout')

@section('contenido')
    <h1>Todos los mensajes</h1>
    <table width="100%" border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Mensaje</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mensajes as $m)
                <tr>
                    
                    <td>
                        <a href="{{route('messages.show',$m->id)}}">
                        {{$m->nombre}}
                        </a>
                    </td>
                    <td>{{$m->email}}</td>
                    <td>{{$m->mensaje}}</td>
                    <td>
                        <a href="{{route('messages.edit', $m->id)}}">Editar</a>
                        
                        <form style="display:inline" method="post" action="{{route('messages.destroy', $m->id)}}">
                            {!!method_field('DELETE')!!}
                            {!!csrf_field()!!}
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
</table>
@stop