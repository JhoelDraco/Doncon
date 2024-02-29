<div>
    <label for="MonedaCaja">Nombre Moneda:</label>
    <input name="nombre_moneda" type="text" value="{{old('nombre_moneda')}}">
</div>
<div>
    <label for="MonedaCaja">Moneda Entrante:</label>
    <input name="moneda_entrante" type="text" value="{{old('moneda_entrante')}}">
</div>

<div>
    <label for="MonedaCaja">Tipo Cambio:</label>
    <input name="tipo_cambio" type="text" value="{{old('tipo_cambio')}}">
</div>


    <button type="submit">Aceptar</button>
    <a href="{{route('marca.index')}}">volver</a>
</div>
