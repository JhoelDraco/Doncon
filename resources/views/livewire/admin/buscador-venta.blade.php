<section>

    <div class="buscadorProductos">
        <input id="buscadorProducto" wire:model.live='productobuscar' placeholder="Buscar Producto">
        <ul id="productoBuscado">
            @foreach ($productos as $producto)
                <li> <button type="button">{{$producto->codigo}}</button></li>
            @endforeach
        </ul>
    </div>

    <table>
        <tbody>
            <tr>
                <td>
                    <label for="codigoProducto">Codigo de Producto:</label>
                    <input id="codigoProducto" class="informacionProducto" type="text" value="@empty(!$productoEncontrado){{$productoEncontrado->codigo}}@endempty" readonly>
                </td>
                <td>
                    <label for="nombreProducto">Nombre de Producto:</label>
                    <input id="nombreProducto" class="informacionProducto" type="text" value="@empty(!$productoEncontrado){{$productoEncontrado->nombre}}@endempty" readonly>
                </td>
                <td>
                    <label for="nombreProducto">Stock:</label>
                    <input id="stockProducto" class="informacionProducto" type="text" value="@empty(!$productoEncontrado){{$productoEncontrado->stock}}@endempty" readonly>
                </td>
                <td>
                    <label for="nombreProducto">Precio:</label>
                    <input id="precioProducto" class="informacionProducto" type="text" value="@empty(!$productoEncontrado){{$productoEncontrado->precio}}@endempty" readonly>
                </td>
            </tr>
        </tbody>
    </table>

    <div>
        <input type="text" name="cantidad" id="cantidadProducto">
    </div>

</section>
