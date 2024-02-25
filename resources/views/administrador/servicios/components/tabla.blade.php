<section>

    <table>
        <thead>
            <tr>
                <th>Tipo</th>
                <th>Descripcion</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($servicios as $servicio)
                <tr>
                    <td>{{$servicio->tipo}}</td>
                    <td>{{$servicio->descripcion}}</td>
                    
                    @can('admin.servicio.mostrar')
                        <td><a href="{{route('servicio.mostrar', $servicio->id)}}">Mostrar</a></td>
                    @endcan
                    
                    @can('admin.servicio.editar')
                        <td><a href="{{route('servicio.editar', $servicio->id)}}">Editar</a></td>
                    @endcan
                    
                    @can('admin.servicio.eliminar')
                        <td>
                            <form method="POST" action="{{route('servicio.eliminar', $servicio->id)}}">
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

    {{ $servicios->links() }}
</section>