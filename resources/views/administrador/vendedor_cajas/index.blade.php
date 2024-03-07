@extends('adminlte::page')

@section('css')
    <link rel="stylesheet" href="{{asset('css/administrador.css')}}">
@stop

@section('js')
    
@stop

@section('title', 'index')

@section('content')

    @can('admin.vendedor_cajas.index')
    @empty($caja)
        <a href="{{route('vendedor_cajas.crear')}}">Iniciar Caja</a>
    @else
        <p>Numero de caja: {{$caja->id}}</p>
        <p>Monto Inicial: {{$caja_dia->monto_inicial}}</p>
    @endempty
    @endcan
    
@stop