<div>
    <label for="codigoProducto">Codigo:</label>
    <input name="codigo" type="text" value="{{old('codigo')}}">
</div>

<div>
    <label for="nombreProducto">Nombre:</label>
    <input name="nombre" type="text" value="{{old('nombre')}}">
</div>

<div>
    <label for="marcaProducto">Marca:</label>
    <input name="marca" type="text" value="{{old('marca')}}">
</div>

<div>
    <label for="tipo">Tipo:</label>
    <input name="tipo" type="text" value="{{old('tipo')}}">
</div>

<div>
    <label for="detalleProducto">Detalle:</label>
    <input name="detalle" type="text" value="{{old('detalle')}}">
</div>

<div>
    <label for="precioProducto">Precio del producto:</label>
    <input name="precio" type="number" value="{{old('precio')}}">
</div>

<div>
    <label for="stockProducto">Stock del producto:</label>
    <input name="stock" type="number" value="{{old('stock')}}">
</div>
<div class="col-lg-4 form_image_admin">
    <div class="image_wrapper_admin">
        <div class="image_admin">
            <img id="img_data_admin" src="" alt="">
        </div>
        <div class="">
            <div class="icon_image_admin"><i class="fa-solid fa-cloud-arrow-up"></i></div>
            <div class="text_image_admin">No hay archivo escogido</div>
            <div id="cancel_btn_admin"><i class="fa-solid fa-xmark"></i></div>
        </div>
    </div>
    
    <input id="default_btn_image" type="file" name="imagen" accept="image/*" hidden>
    <div onclick="defaultBtnActive()" id="custom_btn_image">Elije una imagen</div>
</div>
<div>
    <button type="submit">Aceptar</button>
    <a href="{{route('producto.index')}}">volver</a>
</div>
