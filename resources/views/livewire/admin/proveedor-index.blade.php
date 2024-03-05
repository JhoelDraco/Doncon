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

                <td><a href="{{route('proveedor.mostrar', $proveedors->id)}}">Mostrar</a></td>
                <td><a href="{{route('proveedor.editar', $proveedors->id)}}">Editar</a></td>
                <td>
                    <form method="POST" action="{{route('proveedor.eliminar', $proveedors->id)}}">
                        @csrf
                        @method('delete')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        
        </tbody>
    </table>

    {{ $proveedor->links() }}
</section>