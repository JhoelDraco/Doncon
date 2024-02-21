<section>

    <table>
        <thead>
            <tr>
                <th>CIRS</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Celular</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($clientes as $cliente)
                <tr>
                    <td>{{$cliente->cirs}}</td>
                    <td>{{$cliente->nombre}}</td>
                    <td>{{$cliente->correo}}</td>
                    <td>{{$cliente->celular}}</td>
                    <td><a href="{{route('cliente.mostrar', $cliente->id)}}">Mostrar</a></td>
                    <td><a href="{{route('cliente.editar', $cliente->id)}}">Editar</a></td>
                    <td>
                        <form method="POST" action="{{route('cliente.eliminar', $cliente->id)}}">
                            @csrf

                            @method('delete')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $clientes->links() }}
</section>