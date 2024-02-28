<div>
    <label for="nombre1">Nombre 1:</label>
    <input name="nombre1" type="text" value="{{old('nombre1')}}">
</div>

<div>
    <label for="nombre2">Nombre 2:</label>
    <input name="nombre2" type="text" value="{{old('nombre2')}}">
</div>

<div>
    <label for="apellido1">Apellido 1:</label>
    <input name="apellido1" type="text" value="{{old('apellido1')}}">
</div>

<div>
    <label for="apellido2">Apellido 2:</label>
    <input name="apellido2" type="number" value="{{old('apellido2')}}">
</div>

<div>
    <label for="area">Area:</label>
    <input name="area" type="number" value="{{old('area')}}">
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
    <a href="{{route('personal.index')}}">volver</a>
</div>
