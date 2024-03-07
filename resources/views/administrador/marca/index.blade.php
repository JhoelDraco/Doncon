@extends('adminlte::page')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/administrador.css') }}">
@stop

@section('js')
    
@stop

@section('title', 'index')


@section('content')

    @can('admin.marca.crear')
        <a href="{{route('marca.crear')}}">crear marca</a> 
    @endcan
    
    
    @livewire('admin.marca-index')

@stop

