<div>
    <input type="radio" id="radio_empresa" name="tipo_cliente" value="E" onclick="mostrarFormulario('empresa')" checked>
    <label for="">Empresa</label>

    <input type="radio" id="radio_persona" name="tipo_cliente" value="P" onclick="mostrarFormulario('persona')">
    <label for="">Persona</label>
</div>

<div>
    <label for="ciCliente">CI/NIT:</label>
    <input name="ci" type="text" value="{{old('ci')}}">
    @error('ci')
        <div class="alert alert-danger">{{$message}}</div>
    @enderror
</div>

<!-- Este campo funciona junto a el java script-->

<div id="cambio_empresa_persona">

    <div id="campo_empresa">
        <label for="cirsCliente">Razón Social:</label>
        <input name="cirs" type="text" value="{{old('cirs')}}">
        @error('cirs')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>
    
    <div id="campo_persona">
        <div>
            <label for="nombre1Cliente">Primer nombre:</label>
            <input name="nombre1" type="text" value="{{old('nombre1')}}">
            @error('nombre1')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>

        <div>
            <label for="nombre2Cliente">Segundo nombre:</label>
            <input name="nombre2" type="text" value="{{old('nombre2')}}">
            @error('nombre2')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>

        <div>
            <label for="apellido1Cliente">Primer apellido:</label>
            <input name="apellido1" type="text" value="{{old('apellido1')}}">
            @error('apellido1')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>

        <div>
            <label for="apellido2Cliente">Segundo apellido:</label>
            <input name="apellido2" type="text" value="{{old('apellido2')}}">
            @error('apellido2')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
    </div>
    
</div>

<!------------------------------->

<div>
    <label for="correoCliente">Correo:</label>
    <input name="correo" type="email" value="{{old('correo')}}">
    @error('correo')
        <div class="alert alert-danger">{{$message}}</div>
    @enderror
</div>

<div>
    <label for="celular">Celular:</label>
    <input name="celular" type="number" value="{{old('celular')}}">
    @error('celular')
        <div class="alert alert-danger">{{$message}}</div>
    @enderror
</div>

<div>
    <label for="ubicacion">Ubicación:</label>
    <input name="ubicacion" type="text" value="{{old('ubicacion')}}">
</div>

<div>
    <label for="contacto">Contacto:</label>
    <input name="contacto" type="number" value="{{old('contacto')}}">
</div>

<div>
    <button type="submit">Aceptar</button>
</div>


<script>
    var campo_empresa = document.getElementById('campo_empresa');
    var campo_persona = document.getElementById('campo_persona');

    campo_empresa.style.display = 'block';
    campo_persona.style.display = 'none';

    function mostrarFormulario(tipo) {
        var cambio_empresa_persona = document.getElementById('cambio_empresa_persona');
        if (tipo === 'empresa') {
            campo_empresa.style.display = 'block';
            campo_persona.style.display = 'none';
        } else if (tipo === 'persona') {
            campo_empresa.style.display = 'none';
            campo_persona.style.display = 'block';
        }
    }
</script>