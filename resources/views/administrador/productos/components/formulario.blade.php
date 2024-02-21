<div>
    <label for="nombreProducto">Nombre:</label>
    <input name="nombre" type="text" value="{{old('nombre')}}">
</div>

<div>
    <label for="precioProducto">Precio del producto:</label>
    <input name="precio" type="number" value="{{old('precio')}}">
</div>

<div>
    <label for="stockProducto">Stock del producto:</label>
    <input name="stock" type="number" value="{{old('stock')}}">
</div>

<div>
    <label for="descripcion">Descripcion del producto:</label>
    <textarea name="descripcion" cols="30" rows="10"></textarea>
</div>

<div>
    <button type="submit">Aceptar</button>
</div>
