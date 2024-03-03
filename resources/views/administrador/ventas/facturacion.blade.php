@extends('adminlte::page')

@section('title', 'index')

@section('css')
    <link rel="stylesheet" href="{{asset('css/administrador.css')}}">
@stop

@section('js')
    @livewireScripts
@stop

@section('content_header')
    <h1>FACTURA</h1>
@stop

@section('content')

    <section>
        <form method="POST" action="{{route('factura.almacenar', $venta->id)}}" >
            @csrf

            @include('administrador.ventas.components.formulario_facturacion')
        </form>
    </section>
@stop