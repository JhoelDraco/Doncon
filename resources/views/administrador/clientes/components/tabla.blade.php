<section>

    <table>
        <thead>
            <tr>
                <th>CI</th>
                <th>Tipo</th>
                <th>Nombre(s)</th>
                <th>Apellido(s)</th>
                <th>Correo</th>
                <th>Celular</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($clientes as $cliente)
                <tr>
                    <td>{{$cliente->ci}}</td>
                    
                    @if($cliente->tipo == "E")
                        <td>Empresa</td>
                        <td>{{$cliente->cirs}}</td>
                        <td></td>
                    @elseif($cliente->tipo == "P")
                        <td>Persona</td>
                        <td>{{$cliente->nombre1}} {{$cliente->nombre2}}</td>
                        <td>{{$cliente->apellido1}} {{$cliente->apellido2}}</td>
                    @endif

                    <td>{{$cliente->correo}}</td>
                    <td>{{$cliente->celular}}</td>
                    
                    <td><a href="{{route('cliente.mostrar', $cliente->cliente_id)}}">Mostrar</a></td>
                    <td><a href="{{route('cliente.editar', $cliente->cliente_id)}}">Editar</a></td>
                    <td>
                        <form method="POST" action="{{route('cliente.eliminar', $cliente->cliente_id)}}">
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