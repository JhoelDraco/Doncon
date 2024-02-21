<div>
    <label for="cirsCliente">CIRS:</label>
    <input name="cirs" type="text" value="{{old('cirs')}}">
</div>

<div>
    <label for="nombreCliente">Nombre:</label>
    <input name="nombre" type="text" value="{{old('nombre')}}">
</div>

<div>
    <label for="correoCliente">Correo:</label>
    <input name="correo" type="email" value="{{old('correo')}}">
</div>

<div>
    <label for="celular">Celular:</label>
    <input name="celular" type="number" value="{{old('correo')}}">
</div>

<div>
    <button type="submit">Aceptar</button>
</div>
