@extends('adminlte::page')

@section('css')   
@stop

@section('js')
@stop

@section('title', 'creacionServicio')

@section('content')

    <p>{{$usuario->name}}</p>
    <p>{{$usuario->email}}</p>

    <p>
        @foreach ($roles as $rol)
            {{$rol->name}}
        @endforeach
    </p>
    

    <a href="{{route('usuario.index')}}">volver</a>

@endsection