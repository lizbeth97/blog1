@extends('layout')

@section('contenido')
    <h1>Todos los mensajes</h1>
    <table class="table">
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
                        <a href="{{route('mensajes.show',$m->id)}}">
                        {{$m->nombre}}
                        </a>
                    </td>
                    <td>{{$m->email}}</td>
                    <td>{{$m->mensaje}}</td>
                    <td>
                        <a class="btn btn-info btn-xs" href="{{route('mensajes.edit', $m->id)}}">Editar</a>
                        
                        <form style="display:inline" method="post" action="{{route('mensajes.destroy', $m->id)}}">
                            {!!method_field('DELETE')!!}
                            {!!csrf_field()!!}
                            <button class="btn btn-danger btn-xs" type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
</table>
@stop