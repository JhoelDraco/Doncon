@extends('adminlte::page')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/administrador.css') }}">
@stop

@section('js')
    
@stop

@section('title', 'index')


@section('content')

    @can('admin.empleado.crear')
        <a href="{{route('empleado.crear')}}">Anadir Empleado</a> 
    @endcan
    
    @livewire('admin.empleado-index')

@stop