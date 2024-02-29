@extends('adminlte::page')

@section('css') 
    <link rel="stylesheet" href="{{asset('css/administrador.css')}}">
@stop

@section('js')
@stop

@section('title', 'crecionProducto')

@section('content')

    <section>
        <h3>FORMULARIO PARA CREAR CLIENTES</h3>
        <form method="POST" action="{{route('cliente.almacenar')}}" >
            @csrf

            @include('administrador.clientes.components.formulario')
        </form>
    </section>

@endsection