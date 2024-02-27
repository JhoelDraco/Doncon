@extends('adminlte::page')

@section('css')
    <link rel="stylesheet" href="{{asset('css/administrador.css')}}">  
@stop

@section('js')
@stop

@section('title', 'creacionServicio')

@section('content')

    <section>
        <form method="POST" action="{{route('servicio.almacenar')}}" >
            @csrf

            @include('administrador.servicios.components.formulario')
        </form>
    </section>

@endsection