@extends('adminlte::page')

@section('css')   
<link rel="stylesheet" href="{{asset('css/administrador.css')}}">
@stop

@section('js')
@stop

@section('title', 'crecionTipo')

@section('content')

    <p>{{$tipo->tipo}}</p>
    

    <a href="{{route('tipo.index')}}">volver</a>

@endsection
