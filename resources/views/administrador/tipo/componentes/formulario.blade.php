<div>
    <label for="tipoProducto">Tipo:</label>
    <input name="tipo" type="text" value="@isset($tipo){{$tipo->tipo}}@else{{old('tipo')}}@endisset">
</div>

    <button type="submit">Aceptar</button>
    <a href="{{route('tipo.index')}}">volver</a>
</div>
