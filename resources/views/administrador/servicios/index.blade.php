@extends('adminlte::page')

@section('css')
    
@stop

@section('js')
    
@stop

@section('title', 'index')


@section('content')

    <a href="{{route('servicio.crear')}}">añadir servicio</a>
    
    @include('administrador.servicios.components.tabla')

@stop