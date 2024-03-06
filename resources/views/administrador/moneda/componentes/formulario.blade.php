<div>
    <label for="MonedaCaja">Nombre Moneda:</label>
    <input name="nombre_moneda" type="text" value="@isset($moneda){{$moneda->nombre_moneda}}@else{{old('nombre_moneda')}}@endisset">
    @error('nombre_moneda')
        <div class="alert alert-danger">{{$message}}</div>
    @enderror
</div>
<div>
    <label for="MonedaCaja">Moneda Entrante:</label>
    <input name="moneda_entrante" type="text" value="@isset($moneda){{$moneda->moneda_entrante}}@else{{old('moneda_entrante')}}@endisset">
    @error('moneda_entrante')
        <div class="alert alert-danger">{{$message}}</div>
    @enderror
</div>

<div>
    <label for="MonedaCaja">Tipo Cambio:</label>
    <input name="tipo_cambio" type="text" value="@isset($moneda){{$moneda->tipo_cambio}}@else{{old('tipo_cambio')}}@endisset">
    @error('tipo_cambio')
        <div class="alert alert-danger">{{$message}}</div>
    @enderror
</div>


    <button type="submit">Aceptar</button>
    <a href="{{route('moneda.index')}}">volver</a>
</div>
