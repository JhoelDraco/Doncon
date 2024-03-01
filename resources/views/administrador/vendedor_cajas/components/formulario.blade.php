<div>
    <label for="monto_inicial">Monto Inicial:</label>
    <input type="number" name="monto_inicial" step="any">
</div>

<select name="id_caja">
    @foreach($cajas as $caja)
        @if ($caja->num_caja_dia == 0)
            <option value="{{ $caja->id }}">Caja {{$caja->id}}</option>
        @endif
    @endforeach
</select>

<div>
    <button type="submit">Aceptar</button>
</div>