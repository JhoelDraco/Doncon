@extends('adminlte::page')

@section('css')   
@stop

@section('js')
@stop

@section('title', 'crecionProducto')

@section('content')

    <p>{{$cliente->ci}}</p>
    @if($cliente->tipo == "E")
        <p>{{$empresa->cirs}}</p>
    @else
        <p>{{$persona->nombre1}}</p>
        <p>{{$persona->nombre2}}</p>
        <p>{{$persona->apellido1}}</p>
        <p>{{$persona->apellido2}}</p>
    @endif
    
    <p>{{$cliente->correo}}</p>
    <p>{{$cliente->celular}}</p>
    <p>{{$cliente->ubicacion}}</p>
    <p>{{$cliente->contacto}}</p>

    <a href="{{route('cliente.index')}}">volver</a>

@endsection

