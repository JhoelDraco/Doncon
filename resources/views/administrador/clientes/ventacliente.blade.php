@extends('adminlte::page')

@section('css')
    <link rel="stylesheet" href="{{asset('css/administrador.css')}}">
@stop

@section('js')

@stop  

@section('title', 'index')

@section('content')

    <a href="{{route('venta.crear')}}">Venta</a>
    
    @include('administrador.venta.components.formulario_ventas')

@stop