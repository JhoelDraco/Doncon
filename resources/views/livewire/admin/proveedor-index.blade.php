<section>
   
    <table>
        <thead>
            <tr>
                <th>Cirs</th>
                <th>Celular</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($proveedor as $proveedors)
            <tr>
                <td>{{$proveedors->cirs}}</td>
                <td>{{$proveedors->celular}}</td>

                @can('admin.proveedor.mostrar')
                    <td><a href="{{route('proveedor.mostrar', $proveedors->id)}}">Mostrar</a></td>
                @endcan

                @can('admin.proveedor.editar')
                    <td><a href="{{route('proveedor.editar', $proveedors->id)}}">Editar</a></td>
                @endcan

                @can('admin.proveedor.eliminar')
                    <td>
                        <form method="POST" action="{{route('proveedor.eliminar', $proveedors->id)}}">
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

    {{ $proveedor->links() }}
</section>