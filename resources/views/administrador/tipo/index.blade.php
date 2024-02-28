@extends('adminlte::page')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@stop

@section('js')
    
@stop

@section('title', 'index')


@section('content')

   
  
    <a href="{{route('tipo.crear')}}">crear tipo</a> 
    
    @livewire('admin.tipo-index')

@stop

