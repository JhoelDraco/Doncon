<section>

    <div>
        <input type="text" wire:model.live="buscarRegistro" placeholder="Ingrese para buscar">
    </div>

    <table>
        <thead>
            <tr>
                <th>Nombre Usuario</th>
                <th>Numero de Factura</th>
                <th>Fecha y Hora</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($registroVentas as $registroVenta)
            
                <tr>
                    <td>{{$registroVenta->name}}</td>
                    <td>{{$registroVenta->nro_factura}}</td>
                    <td>{{$registroVenta->fecha_hora}}</td>
                    @can('admin.registro_venta.mostrar')
                        <td><a href="{{route('registro_venta.mostrar', $registroVenta->venta_id)}}">Mostrar</a></td>
                    @endcan
                    
                </tr>
            @endforeach
        </tbody>
        
    </table>
    {{ $registroVentas->links() }}
</section>