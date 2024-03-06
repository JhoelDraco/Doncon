@extends('adminlte::page')

@section('css')   
    <link rel="stylesheet" href="{{asset('css/administrador.css')}}">
@stop

@section('js')
@stop

@section('title', 'creacionServicio')

@section('content')

    <p>{{$compra->cantidad}}</p>
    <p>{{$compra->precio_unitario}}</p>
    <p>{{$compra->subtotal}}</p>

    <a href="{{route('proveedor.index')}}">volver</a>

@endsection