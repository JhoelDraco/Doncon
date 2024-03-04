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

@livewire('admin.buscador-venta')

<button type="button" onclick="agregarVenta()">Agregar</button>

<div>
    <table id="tablaVenta">
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
            <tr>
                
            </tr>
        </tbody>
    </table>
</div>

<table>
    <thead>
        <tr>
            <td>
                <label for="ventasTotalBoliviano">Total en Bolivianos:</label>
                <input id="totalVenta" name="total" type="number" value="" readonly>
            </td>
            
            <div>
                <label for="">Cantidad de monedas de cambio: {{$cantidad_m = count($monedas)}}</label>
                <input id="cantidad_m" type="text" name="cantidad_m" value="{{$cantidad_m}}" hidden="true" readonly>
            </div>

            @foreach($monedas as $index => $moneda)
                <td>
                    <label for="ventasTotal{{$moneda->nombre_moneda}}">Total en {{$moneda->nombre_moneda}}:</label>
                    <input id="moneda{{$index}}" type="number" step="0.01" value="{{$moneda->tipo_cambio}}" hidden="true" readonly>
                    <input id="mostrarMoneda{{$index}}" step="0.01" type="text"  value="" readonly>
                </td>
            @endforeach
        </tr>
    </thead>
</table>

<div>
    <label for="dineroRecibido">Dinero recibido:</label>
    <input id="dineroRecibido" name="recibido" type="number" step="0.01" value="">
</div>

<div>
    <label for="cambioDar">Cambio a dar:</label>
    <input id="cambioDar" name="cambio" type="number" step="0.01" value="" readonly>
</div>

<div>
    <label for="ventas">Descripción:</label>
    <input name="descripcion" type="text" value="{{old('descripcion')}}">
</div>

<div>
    <button type="submit">Aceptar</button>
    <a href="{{ route('cliente.index') }}">Volver</a>
</div> 
