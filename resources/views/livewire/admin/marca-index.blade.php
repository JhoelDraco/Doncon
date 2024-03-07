
<section>

    <table>
        <thead>
            <tr>
                <th>Marca</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($marcas as $marca)
                <tr>
                    <td>{{$marca->marca}}</td>
                 
                    @can('admin.marca.mostrar')
                        <td><a href="{{route('marca.mostrar', $marca->id)}}">Mostrar</a></td>
                    @endcan

                    @can('admin.marca.editar')
                        <td><a href="{{route('marca.editar', $marca->id)}}">Editar</a></td>
                    @endcan

                    @can('admin.marca.eliminar')
                        <td>
                            <form method="POST" action="{{route('marca.eliminar', $marca->id)}}">
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

    {{ $marcas->links() }}
</section>