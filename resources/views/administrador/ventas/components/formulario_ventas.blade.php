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

<div>
    <label for="ventas">Total:</label>
    <input id="totalVenta" name="total" type="number" value="" readonly>
</div>

<div>
    <label for="ventas">Descripción:</label>
    <input name="descripcion" type="text" value="{{old('descripcion')}}">
</div>

<div>
    <button type="submit">Aceptar</button>
    <a href="{{ route('cliente.index') }}">Volver</a>
</div> 
