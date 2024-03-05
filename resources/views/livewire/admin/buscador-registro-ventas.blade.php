<section>

    <div>
        <input type="text" wire:model.live="buscarRegistro" placeholder="Ingrese para buscar">
    </div>

    <table>
        <thead>
            <tr>
                <th>Nombre Usuario</th>
                <th>Email de Usuario</th>
                <th>Numero de Caja</th> 
                <th>Nuermo de Venta</th>
                <th>Numero de Factura</th>
                <th>Fecha y Hora</th>
                <th>Total</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($registroVentas as $registroVenta)
                <tr>
                    <td>{{$registroVenta->name}}</td>
                    <td>{{$registroVenta->email}}</td>
                    <td>{{$registroVenta->id_caja}}</td>
                    <td>{{$registroVenta->venta_id}}</td>
                    <td>{{$registroVenta->nro_factura}}</td>
                    <td>{{$registroVenta->fecha_hora}}</td>
                    <td>{{$registroVenta->total}}</td>
                    <td><a href="{{route('registro_venta.mostrar', $registroVenta->venta_id)}}">Mostrar</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $registroVentas->links() }}
</section>