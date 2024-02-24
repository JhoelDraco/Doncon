@extends('adminlte::page')

@section('css')   
@stop

@section('js')
@stop

@section('title', 'creacionServicio')

@section('content')

    <p>{{$servicio->tipo}}</p>
    <p>{{$servicio->descripcion}}</p>

    <a href="{{route('servicio.index')}}">volver</a>

@endsection