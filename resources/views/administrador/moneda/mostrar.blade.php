@extends('adminlte::page')

@section('css')   
<link rel="stylesheet" href="{{asset('css/administrador.css')}}">
@stop

@section('js')
@stop

@section('title', 'MostrarTipo')

@section('content')

    <p>{{$moneda->nombre_moneda}}</p>
    <p>{{$moneda->moneda_entrante}}</p>
    <p>{{$moneda->tipo_cambio}}</p>
    

    <a href="{{route('moneda.index')}}">volver</a>

@endsection
