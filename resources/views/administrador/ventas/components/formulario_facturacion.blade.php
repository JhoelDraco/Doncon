<div>
    @if($cliente->tipo==='P')
        <label>Datos del Cliente:</label>
        <label>CI del Cliente:{{$cliente->ci}}</label>
        <label>Nombre(s) del Cliente:{{$cliente->nombre1}} {{$cliente->nombre2}}</label>
        <label>Apellido(s) del Cliente:{{$cliente->apellido1}} {{$cliente->apellido2}}</label>
    
    @elseif($cliente->tipo==='E')
        <label>{{$cliente->ci}}</label>
        <label>{{$cliente->cirs}}</label>
    @endif
</div>

<div>
    <label for="nuermoFactura">Numero Factura:</label>
    <input name="numero_factura" type="text" value="{{old('numero_factura')}}">
</div>

<div>
    <label for="codigoFactura">Codigo autorizacion:</label>
    <input name="codigo_autorizacion" type="text" value="{{old('codigo_autorizacion')}}">
</div>

<div>
    <label for="nitFactura">NIT:</label>
    <input name="nit" type="text" value="{{old('nit')}}">
</div>

<section>

    <table>
        <thead>
            <tr>
                <td>Codigo</td>
                <td>Nombre Producto</td>
                <td>Precio unitario</td>
                <td>Cantidad</td>
                <td>Subtotal</td>
            </tr>
        </thead>

        <tbody>
            @foreach ($productos as $producto)
                <tr>
                    <td><label for="">{{$producto->codigo}}</label></td>
                    <td><label for="">{{$producto->nombre}}</label></td>
                    <td><label for="">{{$producto->precio}}</label></td>
                    <td><label for="">{{$producto->cantidad}}</label></td>
                    <td><label for="">{{$producto->subtotal}}</label></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
    <div>
        <label for="ventas">Total en Bolivianos:</label>
        <input id="totalVenta" name="total" type="number" value="{{$venta->total}}" readonly>
    </div>

    <button type="submit">Aceptar</button>
</section>