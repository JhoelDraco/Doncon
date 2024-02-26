@extends('adminlte::page')

@section('css')
    
@stop

@section('js')
    
@stop

@section('title', 'index')


@section('content')

    @can('admin.producto.crear')
        <a href="{{route('producto.crear')}}">crear producto</a> 
    @endcan
    
    
    @livewire('admin.producto-index')

@stop

