@extends('layout')

@section('contenido')
    <h1>Todos los mensajes</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Mensaje</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mensajes as $m)
                <tr>
                    <td>{{$m->nombre}}</td>
                    <td>{{$m->email}}</td>
                    <td>{{$m->mensaje}}</td>
                </tr>
            @endforeach

            <td>
                    <a class="btn btn-info btn-xs" 
                    href="{{route('mensajes.edit', $message->id)}}">Editar</a>
                    <form style="display: inline" 
                        method="POST" 
                        action="{{route('mensajes.destroy', $message->id)}}">
                        {!!csrf_field()!!}
                        {!! method_field('DELETE')!!}

                        <button class="btn btn-danger btn-xs" type="submit">Eliminar</button>
                        
                    </form>
                </td>
        </tbody>

</table>
@stop