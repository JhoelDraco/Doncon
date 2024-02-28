@extends('adminlte::page')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/administrador.css') }}">
@stop

@section('js')
    
@stop

@section('title', 'index')


@section('content')

        <a href="{{route('marca.crear')}}">crear marca</a> 
    
    
    @livewire('admin.marca-index')

@stop

