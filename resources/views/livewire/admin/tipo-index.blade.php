
<section>

    <table>
        <thead>
            <tr>
                <th>Tipo</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($tipos as $tipo)
                <tr>
                    <td>{{$tipo->tipo}}</td>
                    
                    @can('admin.tipo.mostrar')
                        <td><a href="{{route('tipo.mostrar', $tipo->id)}}">Mostrar</a></td>
                    @endcan
                    
                    @can('admin.tipo.editar')
                        <td><a href="{{route('tipo.editar', $tipo->id)}}">Editar</a></td>
                    @endcan
                    
                    @can('admin.tipo.eliminar')
                        <td>
                            <form method="POST" action="{{route('tipo.eliminar', $tipo->id)}}">
                                @csrf

                                @method('delete')
                                <button type="submit">Eliminar</button>
                            </form>
                        </td>
                    @endcan
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $tipos->links() }}
</section>