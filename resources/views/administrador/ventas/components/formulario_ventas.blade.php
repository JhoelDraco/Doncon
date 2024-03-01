<div>@if($cliente->tipo==='P')
    <label>Datos del Cliente:</label>
    <label>CI del Cliente:{{$cliente->ci}}
    <label>Nombre(s) del Cliente:{{$cliente->nombre1}} {{$cliente->nombre2}}</label>
    <label>Apellido(s) del Cliente:{{$cliente->apellido1}} {{$cliente->apellido2}}</label>


@elseif($cliente->tipo==='E')
{{$cliente->ci}}
<br>{{$cliente->cirs}}
@endif
</div>





<div>
    <label for="ventas">Estado:</label>
    <input name="estado" type="text" value="{{old('estado')}}">
</div>

<div>
    <label for="ventas">Total:</label>
    <input name="total" type="number" value="{{ old('total') }}">
</div>

<div>
    <label for="ventas">Descripción:</label>
    <input name="descripcion" type="text" value="{{old('descripcion')}}">
</div>

<div>
    <button type="submit">Aceptar</button>
    <a href="{{ route('cliente.index') }}">Volver</a>
</div>
