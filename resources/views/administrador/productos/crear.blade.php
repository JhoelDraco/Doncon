@extends('adminlte::page')

@section('css')   
    <link rel="stylesheet" href="{{asset('css/administrador.css')}}">
@stop

@section('js')
<script src="https://kit.fontawesome.com/9591dc8836.js" crossorigin="anonymous"></script>
<script src="{{asset('js/script_admin.js')}}"></script>

@stop

@section('title', 'crecionProducto')

@section('content')

    <section>
        <form method="POST" action="{{route('producto.almacenar')}}" enctype="multipart/form-data">

            @csrf

            @include('administrador.productos.components.formulario')
        </form>
    </section>
    <script>
        //Modificación de imagenes
        const wrapper = document.querySelector(".image_wrapper_admin");
        const cancelBtn = document.querySelector("#cancel_btn_admin");
        const defaultBtn = document.getElementById('default_btn_image');
        const customBtn = document.querySelector("#custom_btn_image");
        const img = document.querySelector("#img_data_admin");
        const fileName = document.querySelector(".file_name_admin");
        let regExp = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_]+$/;

        defaultBtn.addEventListener('change', changeImage);

        function defaultBtnActive(){
            defaultBtn.click();
        }
        
        function changeImage(){
            const file = this.files[0];

            if(file){
                const reader = new FileReader();

                reader.onload = function(){
                    const result = reader.result;
                    img.src = result;
                    wrapper.classList.add("active");
                }
                cancelBtn.addEventListener('click', function(){
                    img.src = "";
                    wrapper.classList.remove("active");
                });

                reader.readAsDataURL(file);
            }

            if(this.value){
                let valueStore = this.value.match(regExp);
                fileName.textContent = valueStore;
            }
        }
        
    </script>
@endsection