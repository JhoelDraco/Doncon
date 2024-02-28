@extends('adminlte::page')

@section('title', 'index')

@section('css')
    <link rel="stylesheet" href="{{asset('css/administrador.css')}}">
@stop

@section('js')
    @livewireScripts
@stop

@section('content_header')
    <h1>Lista de usuarios</h1>
@stop

@section('content')

    @can('admin.usuario.crear')
        <a href="{{route('usuario.crear')}}">Agregar usuario</a>
    @endcan

    @livewire('admin.users-index')
@stop

