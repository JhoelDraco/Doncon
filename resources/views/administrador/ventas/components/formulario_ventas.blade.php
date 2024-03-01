<div>
    <label for="tipoServicio">Estado:</label>
    <input name="estado" type="text" value="{{old('estado')}}">
</div>

<div>
    <label for="precioProducto">Total:</label>
    <input name="total" type="number" value="{{ old('total') }}">
</div>

<div>
    <label for="tipoServicio">Descripción:</label>
    <input name="descripcion" type="text" value="{{old('descripcion')}}">
</div>

<div>
    <button type="submit">Aceptar</button>
    <a href="{{ route('servicio.index') }}">Volver</a>
</div>
