@extends('adminlte::page')

@section('css')   
<link rel="stylesheet" href="{{asset('css/administrador.css')}}">
@stop

@section('js')
@stop

@section('title', 'crecionTipo')

@section('content')

    <p>{{$marca->marca}}</p>
    

    <a href="{{route('marca.index')}}">volver</a>

@endsection
