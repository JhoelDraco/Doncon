<div>
    <label for="ciCliente">CI/NIT:</label>
    <input name="ci" type="text" value="{{$cliente->ci}}">
</div>

<div>
    <label for="nombre1Cliente">Primer nombre:</label>
    <input name="nombre1" type="text" value="{{$c_cliente->nombre1}}">
</div>

<div>
    <label for="nombre2Cliente">Segundo nombre:</label>
    <input name="nombre2" type="text" value="{{$c_cliente->nombre2}}">
</div>

<div>
    <label for="apellido1Cliente">Primer apellido:</label>
    <input name="apellido1" type="text" value="{{$c_cliente->apellido1}}">
</div>

<div>
    <label for="apellido2Cliente">Segundo apellido:</label>
    <input name="apellido2" type="text" value="{{$c_cliente->apellido2}}">
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