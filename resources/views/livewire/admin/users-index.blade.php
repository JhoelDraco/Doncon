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

                    @can('admin.usuario.mostrar')
                        <td><a href="{{route('usuario.mostrar', $usuario->id)}}">Mostrar</a></td>
                    @endcan

                    @can('admin.usuario.editar')
                        <td><a href="{{route('usuario.editar', $usuario->id)}}">Editar</a></td>
                    @endcan

                    @can('admin.usuario.eliminar')
                        <td>
                            <form method="POST" action="{{route('usuario.eliminar', $usuario->id)}}">
                                @csrf

                                @method('DELETE')
                                <button type="submit">Eliminar</button>
                            </form>
                        </td>
                    @endcan
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $usuarios->links() }}
</section>
