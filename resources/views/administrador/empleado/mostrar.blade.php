@extends('adminlte::page')

@section('css')   
@stop

@section('js')
@stop

@section('title', 'creacionEmpleado')

@section('content')

    <p>{{$empleado->nombre1}}</p>
    <p>{{$empleado->nombre2}}</p>
    <p>{{$empleado->apellido1}}</p>
    <p>{{$empleado->apellido2}}</p>
    <p>{{$empleado->area}}</p>
    <p>{{$empleado->imagen}}</p>
    

    <a href="{{route('empleado.index')}}">volver</a>

@endsection

