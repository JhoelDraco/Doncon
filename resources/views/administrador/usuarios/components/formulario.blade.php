<div>
    <label for="nombreUsuario">Nombre:</label>
    <input name="name" type="text" value="{{$usuario->name}}">
</div>

<div>
    <label for="emailUsuario">Email:</label>
    <input name="email" type="text" value="{{$usuario->email}}">
</div>

<div>
    <h5>Listado de roles</h5>
    @foreach ($roles as $rol)
        <div>
            <label>
                <input type="checkbox" name="roles[]" value="{{$rol->id}}"  {{ $usuario->roles && $usuario->roles->contains($rol->id) ? 'checked' : '' }}>
                {{$rol->name}}
            </label>
        </div>
    @endforeach
</div>


<div>
    <button type="submit">Aceptar</button>
</div>