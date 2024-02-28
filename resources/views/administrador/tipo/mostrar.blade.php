@extends('adminlte::page')

@section('css')   
@stop

@section('js')
@stop

@section('title', 'crecionTipo')

@section('content')

    <p>{{$tipo->tipo}}</p>
    

    <a href="{{route('tipo.index')}}">volver</a>

@endsection
