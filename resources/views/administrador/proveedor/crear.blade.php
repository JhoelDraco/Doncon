@extends('adminlte::page')

@section('css')   
    <link rel="stylesheet" href="{{asset('css/administrador.css')}}">
@stop

@section('js')
<script src="https://kit.fontawesome.com/9591dc8836.js" crossorigin="anonymous"></script>
<script src="{{asset('js/script_admin.js')}}"></script>

@stop

@section('title', 'creacionProveedor')

@section('content')

    <section>
        <h3>FORMULARIO PARA CREAR PROVEEDORES</h3>
        <form method="POST" action="{{route('proveedor.almacenar')}}" enctype="multipart/form-data">

            @csrf

            @include('administrador.proveedor.components.formulario')
        </form>
    </section>
   
@endsection