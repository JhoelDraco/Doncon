@extends('adminlte::page')

@section('css')
    <link rel="stylesheet" href="{{asset('css/administrador.css')}}">
@stop

@section('js')
    
@stop

@section('title', 'index')


@section('content')

    @empty($caja)
        <a href="{{route('vendedor_cajas.crear')}}">Iniciar Caja</a>
    @else
        {{$caja->id}}
    @endempty

@stop