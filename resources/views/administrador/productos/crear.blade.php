@extends('adminlte::page')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/Admin.css') }}">
@stop

@section('js')
@stop

@section('title', 'crecionProducto')

@section('content')

    <section>
        <form method="POST" action="{{route('producto.almacenar')}}" >
            @csrf

            @include('administrador.productos.components.formulario')
        </form>
    </section>

@endsection