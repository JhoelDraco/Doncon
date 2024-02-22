@extends('adminlte::page')

@section('css')   
@stop

@section('js')
@stop

@section('title', 'crecionProducto')

@section('content')

    <p>{{$cliente->ci}}</p>
    <p>{{$empresa->cirs}}</p>
    <p>{{$cliente->correo}}</p>
    <p>{{$cliente->celular}}</p>

    <a href="{{route('cliente.index')}}">volver</a>

@endsection

