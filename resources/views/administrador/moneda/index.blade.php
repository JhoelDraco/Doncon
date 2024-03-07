@extends('adminlte::page')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/administrador.css') }}">
@stop

@section('js')
    
@stop

@section('title', 'index')


@section('content')

    @can('admin.moneda.crear')
        <a href="{{route('moneda.crear')}}">crear moneda</a> 
    @endcan
    
    @livewire('admin.moneda-index')

@stop

