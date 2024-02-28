@extends('adminlte::page')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@stop

@section('js')
    
@stop

@section('title', 'index')


@section('content')

        <a href="{{route('empleado.crear')}}">Anadir Empleado</a> 
    
    
    @livewire('admin.empleado-index')

@stop