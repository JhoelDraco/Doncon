@extends('adminlte::page')

@section('css')
    
@stop

@section('js')
    
@stop

@section('title', 'index')


@section('content')

    <a href="{{route('producto.crear')}}">crear producto</a>
    
    @livewire('admin.producto-index')

@stop

