<div>
    <label for="nombreUsuario">Nombre:</label>
    <input name="name" type="text" value="{{ old('name', isset($user) ? $user->name : '') }}">
</div>

<div>
    <label for="emailUsuario">Email:</label>
    <input name="email" type="text" value="{{ old('email', isset($user) ? $user->email : '') }}">
</div>

<div>
    <label for="passwordUsuario">Contraseña:</label>
    <input name="password" type="text" value="{{ old('password', isset($user) ? $user->password : '') }}">
</div>

<div>
    <h5>Listado de roles</h5>

    @if(isset($usuario))
        @foreach ($roles as $rol)
            <div>
                <label>
                    <input type="checkbox" name="roles[]" value="{{$rol->id}}"  {{ $usuario->roles && $usuario->roles->contains($rol->id) ? 'checked' : '' }}>
                    {{$rol->name}}
                </label>
            </div>
        @endforeach
    @else

        @foreach ($roles as $rol)
            <div>
                <label>
                    <input type="checkbox" name="roles[]" value="{{$rol->id}}">
                    {{$rol->name}}
                </label>
            </div>
        @endforeach

    @endif
    
</div>


<div>
    <button type="submit">Aceptar</button>
</div>