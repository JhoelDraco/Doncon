<section>
    <div>
        <input wire:model.live='productobuscar' placeholder="Buscar Producto"> 

    </div>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Stock</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($productos as $producto)
                <tr>
                    <td>{{$producto->nombre}}</td>
                    <td>{{$producto->precio}}</td>
                    <td>{{$producto->stock}}</td>
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