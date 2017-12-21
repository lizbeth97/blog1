{!!csrf_field()!!}
    
    @if(!$mensaje->nombre && !$mensaje->emial)
        <p><label for="nombre">
            Nombre
            <input class="form-control" type="text" name="nombre" value="{{$mensaje->nombre or old('nombre')}}">
            {!!$errors->first('nombre', '<span class=error>:message</span>') !!}
        </label></p>
        
        <p><label for="email">
            Email
            <input class="form-control" type="text" name="email" value="{{ $mensaje->email or old('email')}}">
            {!!$errors->first('email', '<span class=error>:message</span>') !!}
            </label></p>
    @endif

    <p><label for="mensaje">
        Mensaje
        <textarea class="form-control" name="mensaje">{{ $mensaje->mensaje or old('mensaje')}}</textarea>
        {!!$errors->first('mensaje', '<span class=error>:message</span>') !!}
        </label></p>
    
    <input class="btn btn-primary" type="submit" value="{{ $btntext ?? 'Guardar'}}">