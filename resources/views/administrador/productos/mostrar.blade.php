@extends('adminlte::page')

@section('css')   
@stop

@section('js')
@stop

@section('title', 'crecionProducto')

@section('content')

    <p>{{$producto->nombre}}</p>
    <p>{{$producto->precio}}</p>
    <p>{{$producto->stock}}</p>
    <p>{{$producto->descripcion}}</p>

    <a href="{{route('producto.index')}}">volver</a>

@endsection

