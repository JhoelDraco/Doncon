<div>
    <label for="nombreRol">Nombre:</label>
    <input name="name" type="text" value="{{old('name')}}">
</div>

@error('name')
    <small>
        {{$message}}
    </small>
@enderror

@foreach ($permisos as $permiso)

    <div>
        <input type="checkbox" name="permisos[]" value="{{$permiso->id}}">
        {{$permiso->description}}
    </div>
    
@endforeach

<div>
    <button type="submit">Aceptar</button>
</div>