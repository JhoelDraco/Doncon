@extends('adminlte::page')

@section('css')
    <link rel="stylesheet" href="{{asset('css/administrador.css')}}"> 
@stop

@section('js')
@stop

@section('title', 'creacionServicio')

@section('content')

    <section>
        <h3>COMPRAS</h3>
        <form method="POST" action="{{route('compras.almacenar')}}">
            @csrf
            
            @include('administrador.compras.components.formulario_compras')
        </form>
    </section>

@endsection