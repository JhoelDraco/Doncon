@extends('adminlte::page')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@stop

@section('js')
    
@stop

@section('title', 'index')


@section('content')

    @can('admin.producto.crear')
        <a href="{{route('personal.crear')}}">Anadir Personal</a> 
    @endcan
    
    
    @livewire('admin.personal-index')

@stop