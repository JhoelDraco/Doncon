<div>
    <label for="monto_inicial">Monto Inicial:</label>
    <input type="number" name="monto_inicial" step="any">
</div>

<select name="id_caja">
    @foreach($cajas as $caja)
        <option value="{{ $caja->id }}">Caja {{$caja->id}}</option>
    @endforeach
</select>

<div>
    <button type="submit">Aceptar</button>
</div>