@extends('adminlte::page')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/administrador.css') }}">
@stop

@section('js')
    
@stop

@section('title', 'index')


@section('content')

   
    @can('admin.tipo.crear')
        <a href="{{route('tipo.crear')}}">crear tipo</a> 
    @endcan
    
    
    @livewire('admin.tipo-index')

@stop

