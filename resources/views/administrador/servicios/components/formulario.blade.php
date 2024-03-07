<div>
    <label for="tipoServicio">Nombre:</label>
    <input name="nombre" type="text" value="@isset($servicio){{$servicio->nombre}}@else{{old('nombre')}}@endisset">
    @error('nombre')
        <div class="alert alert-danger">{{$message}}</div>
    @enderror
</div>

<div>
    <label for="tipoServicio">Tipo:</label>
    <input name="tipo" type="text" value="@isset($servicio){{$servicio->tipo}}@else{{old('tipo')}}@endisset">
    @error('tipo')
        <div class="alert alert-danger">{{$message}}</div>
    @enderror
</div>

<div>
    <label for="descripcion">Descripcion del servicio:</label>
    <textarea name="descripcion" cols="30" rows="10"></textarea>
</div>

<div>
    <button type="submit">Aceptar</button>
    <a href="{{ route('servicio.index') }}">Volver</a>
</div>
