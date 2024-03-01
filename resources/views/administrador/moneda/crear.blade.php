@extends('adminlte::page')

@section('css')   
    <link rel="stylesheet" href="{{asset('css/administrador.css')}}">
@stop

@section('js')
<script src="https://kit.fontawesome.com/9591dc8836.js" crossorigin="anonymous"></script>
<script src="{{asset('js/script_admin.js')}}"></script>

@stop

@section('title', 'crearMoneda')

@section('content')

    <section>
        <h3>FORMULARIO PARA CREAR MONEDAS</h3>
        <form method="POST" action="{{route('moneda.almacenar')}}">

            @csrf

            @include('administrador.moneda.componentes.formulario')
        </form>
    </section>
@endsection