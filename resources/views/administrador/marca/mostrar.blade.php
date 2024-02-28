@extends('adminlte::page')

@section('css')   
@stop

@section('js')
@stop

@section('title', 'crecionTipo')

@section('content')

    <p>{{$marca->marca}}</p>
    

    <a href="{{route('marca.index')}}">volver</a>

@endsection
