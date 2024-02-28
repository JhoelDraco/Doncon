@extends('adminlte::page')

@section('css')   
    <link rel="stylesheet" href="{{asset('css/administrador.css')}}">
@stop

@section('js')
@stop

@section('title', 'crecionProducto')

@section('content')

    <p>{{$producto->codigo}}</p>
    <p>{{$producto->nombre}}</p>
    <p>{{$producto->detalle}}</p>
    <p>{{$producto->precio}}</p>
    <p>{{$producto->stock}}</p>
    <p>{{$producto->imagen}}</p>
    

    <a href="{{route('producto.index')}}">volver</a>

@endsection

