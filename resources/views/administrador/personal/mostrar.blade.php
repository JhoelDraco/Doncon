@extends('adminlte::page')

@section('css')   
@stop

@section('js')
@stop

@section('title', 'creacionPersonal')

@section('content')

    <p>{{$personal->nombre1}}</p>
    <p>{{$personal->nombre2}}</p>
    <p>{{$personal->apellido1}}</p>
    <p>{{$personal->apellido2}}</p>
    <p>{{$personal->area}}</p>
    <p>{{$personal->imagen}}</p>
    

    <a href="{{route('producto.index')}}">volver</a>

@endsection

