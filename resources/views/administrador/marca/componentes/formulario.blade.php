<div>
    <label for="marcaProducto">Marca:</label>
    <input name="marca" type="text" value="@isset($marca){{$marca->marca}}@else{{old('marca')}}@endisset">
    @error('marca')
        <div class="alert alert-danger">{{$message}}</div>
    @enderror
</div>

    <button type="submit">Aceptar</button>
    <a href="{{route('marca.index')}}">volver</a>
</div>
