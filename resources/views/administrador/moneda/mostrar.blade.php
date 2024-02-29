@extends('adminlte::page')

@section('css')   
<link rel="stylesheet" href="{{asset('css/administrador.css')}}">
@stop

@section('js')
@stop

@section('title', 'MostrarTipo')

@section('content')

    <p>{{$marca->marca}}</p>
    

    <a href="{{route('moneda.index')}}">volver</a>

@endsection
