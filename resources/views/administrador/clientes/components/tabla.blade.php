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
                <th>Ubicacion</th>
                <th>Contacto</th>
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
                    <td>{{$cliente->ubicacion}}</td>
                    <td>{{$cliente->contacto}}</td>
                    
                    @can('admin.cliente.mostrar')
                        <td><a href="{{route('cliente.mostrar', $cliente->cliente_id)}}">Mostrar</a></td> 
                    @endcan
                    
                    @can('admin.cliente.editar')
                        <td><a href="{{route('cliente.editar', $cliente->cliente_id)}}">Editar</a></td>
                    @endcan

                    @can('admin.cliente.eliminar')
                        <td>
                            <form method="POST" action="{{route('cliente.eliminar', $cliente->cliente_id)}}">
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
</section>