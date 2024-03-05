<div>
    <label for="proveedor">C.I. o R.S.:</label>
    <select name="id_proveedor">
        @foreach ($proveedor as $proveedors)
            <option value="{{ $proveedors->id }}">{{ $proveedors->cirs }}</option>
        @endforeach
    </select>   
</div>

<div>
    <label for="proveedor">Numero Celular:</label>
    <select name="id_proveedor">
        @foreach ($proveedor as $proveedors)
            <option value="{{ $proveedors->id }}">{{ $proveedors->celular }}</option>
        @endforeach
    </select>
</div>

@livewire('admin.buscador-compra')

<div>
    <label for="compras">Detalle:</label>
    <input name="detalle" type="text" value="{{old('detalle')}}">
</div>

<div>
    <label for="compras">Precio Unitario:</label>
    <input name="precio_unitario" type="number" value="{{old('precio_unitario')}}">
</div>

<div>
    <label for="subtotal">Subtotal:</label>
    <input name="subtotal" type="number" value="{{old('subtotal')}}">
</div>

<div>
    <button type="submit">Aceptar</button>
    <a href="{{ route('producto.index') }}">Volver</a>
</div>
