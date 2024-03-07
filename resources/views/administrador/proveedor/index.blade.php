@extends('adminlte::page')

@section('css')
    <link rel="stylesheet" href="{{asset('css/administrador.css')}}">
@stop

@section('js')
    
@stop

@section('title', 'index')


@section('content')

    @can('admin.proveedor.crear')
        <a href="{{route('proveedor.crear')}}">Crear Proveedor</a> 
    @endcan
        
    @livewire('admin.proveedor-index')

@stop

