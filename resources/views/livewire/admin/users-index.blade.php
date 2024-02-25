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
                    
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $usuarios->links() }}
</section>
