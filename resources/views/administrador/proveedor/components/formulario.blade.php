<div>
    <label for="cirs">Cirs:</label>
    <input name="cirs" type="text" value="{{ old('cirs') }}">
</div>


<div>
    <label for="nombreProducto">Celular:</label>
    <input name="celular" type="text" value="{{ old('celular') }}">
</div>


<div>
    <button type="submit">Aceptar</button>
    <a href="{{ route('proveedor.index') }}">Volver</a>
</div>
