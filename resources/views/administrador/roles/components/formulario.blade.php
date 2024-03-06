<div>
    <label for="nombreRol">Nombre:</label>
    <input name="name" type="text" value="{{old('name')}}">
    @error('name')
        <div class="alert alert-danger">{{$message}}</div>
    @enderror
</div>

@isset($rol)
    @foreach ($permisos as $permiso)
        <div>
            <input type="checkbox" name="permisos[]" value="{{$permiso->id}}" {{ $rol->permissions && $rol->permissions->contains($permiso->id) ? 'checked' : '' }}>
            {{$permiso->description}}
        </div>
    @endforeach
@else
    @foreach ($permisos as $permiso)
    <div>
        <input type="checkbox" name="permisos[]" value="{{$permiso->id}}">
        {{$permiso->description}}
    </div>
    @endforeach
@endisset


<div>
    <button type="submit">Aceptar</button>
    <a href="{{ route('rol.index') }}">Volver</a>
</div>