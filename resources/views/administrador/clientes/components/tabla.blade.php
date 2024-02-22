<section>

    <table>
        <thead>
            <tr>
                <th>CI</th>
                <th>CIRS</th>
                <th>Correo</th>
                <th>Celular</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($clientes as $cliente)
                <tr>
                    <td>{{$cliente->ci}}</td>
                    <td>{{$cliente->cirs}}</td>
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
</section>