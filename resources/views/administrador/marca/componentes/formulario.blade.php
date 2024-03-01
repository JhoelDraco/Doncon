<div>
    <label for="marcaProducto">Marca:</label>
    <input name="marca" type="text" value="@isset($marca){{$marca->marca}}@else{{old('marca')}}@endisset">
</div>

    <button type="submit">Aceptar</button>
    <a href="{{route('marca.index')}}">volver</a>
</div>
