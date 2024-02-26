@extends('adminlte::page')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/Admin.css') }}">
@stop

@section('js')
    
@stop

@section('title', 'index')


@section('content')

    <a href="{{route('producto.crear')}}">crear producto</a>
    
    @include('administrador.productos.components.tabla')

@stop

