{{$cliente->ci}}


<div>
    <label for="ventas">Estado:</label>
    <input name="estado" type="text" value="{{old('estado')}}">
</div>

<div>
    <label for="ventas">Total:</label>
    <input name="total" type="number" value="{{ old('total') }}">
</div>

<div>
    <label for="ventas">Descripción:</label>
    <input name="descripcion" type="text" value="{{old('descripcion')}}">
</div>

<div>
    <button type="submit">Aceptar</button>
    <a href="{{ route('cliente.index') }}">Volver</a>
</div>
