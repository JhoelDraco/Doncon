@extends('adminlte::page')

@section('css')   
@stop

@section('js')
@stop

@section('title', 'crecionProducto')

@section('content')

    <p>{{$producto->codigo}}</p>
    <p>{{$producto->nombre}}</p>
    <p>{{$producto->marca}}</p>
    <p>{{$producto->tipo}}</p>
    <p>{{$producto->detalle}}</p>
    <p>{{$producto->precio}}</p>
    <p>{{$producto->stock}}</p>
    <p>{{$producto->imagen}}</p>
    

    <a href="{{route('producto.index')}}">volver</a>

@endsection

