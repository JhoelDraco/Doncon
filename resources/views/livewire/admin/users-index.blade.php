<section>

    <div>
        <input type="text" wire:model.live="buscadorUsuario" placeholder="Ingrese para buscar">
    </div>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            @foreach ($usuarios as $usuario)
                <tr>
                    <td>{{$usuario->name}}</td>
                    <td>{{$usuario->email}}</td>
                    <td></td>
                    <td><a href="{{route('usuario.mostrar', $usuario->id)}}">Mostrar</a></td>
                    <td><a href="{{route('usuario.editar', $usuario->id)}}">Editar</a></td>
                    <td>
                        <form method="POST" action="{{route('usuario.eliminar', $usuario->id)}}">
                            @csrf

                            @method('delete')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $usuarios->links() }}
</section>
