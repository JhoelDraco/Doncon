<div>
    <label for="ciCliente">CI/NIT:</label>
    <input name="ci" type="text" value="{{$cliente->ci}}">
</div>

<div>
    <label for="cirsCliente">Razón Social:</label>
    <input name="cirs" type="text" value="{{$c_cliente->cirs}}">
</div>

<div>
    <label for="correoCliente">Correo:</label>
    <input name="correo" type="email" value="{{$cliente->correo}}">
</div>

<div>
    <label for="celular">Celular:</label>
    <input name="celular" type="number" value="{{$cliente->celular}}">
</div>

<div>
    <label for="ubicacion">Ubicación:</label>
    <input name="ubicacion" type="text" value="{{$cliente->ubicacion}}">
</div>

<div>
    <label for="contacto">Contacto:</label>
    <input name="contacto" type="number" value="{{$cliente->contacto}}">
</div>

<div>
    <button type="submit">Aceptar</button>
</div>