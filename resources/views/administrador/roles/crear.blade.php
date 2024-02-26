@extends('adminlte::page')

@section('css')
    
@stop

@section('js')

@stop  

@section('title', 'index')

@section('content')

    
    <section>
        <form method="POST" action="{{route('rol.almacenar')}}" >
            @csrf

            @include('administrador.roles.components.formulario')
        </form>
    </section>

@stop