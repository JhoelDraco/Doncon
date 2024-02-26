<section>
    <div>
        <input wire:model.live='productobuscar' placeholder="Buscar Producto" whire:model.live='productocodigo'> 

    </div>

    <table>
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Marca</th>
                <th>Tipo</th>
                <th>Detalle</th>

            </tr>
        </thead>

        <tbody>
            @foreach ($productos as $producto)
                <tr>
                    <td>{{$producto->codigo}}</td>
                    <td>{{$producto->nombre}}</td>
                    <td>{{$producto->marca}}</td>
                    <td>{{$producto->tipo}}</td>
                    <td>{{$producto->detalle}}</td>
                    <td>{{$producto->precio}}</td>
                    <td>{{$producto->stock}}</td>
                    <td>{{$producto->imagen}}</td>
                    <td><a href="{{route('producto.mostrar', $producto->id)}}">Mostrar</a></td>
                    <td><a href="{{route('producto.editar', $producto->id)}}">Editar</a></td>
                    <td>
                        <form method="POST" action="{{route('producto.eliminar', $producto->id)}}">
                            @csrf

                            @method('delete')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $productos->links() }}
</section>