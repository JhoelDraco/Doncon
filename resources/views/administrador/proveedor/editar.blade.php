@extends('adminlte::page')

@section('css')   
<link rel="stylesheet" href="{{asset('css/administrador.css')}}">
@stop

@section('js')
@stop

@section('title', 'Edición de Producto')

@section('content')

    <section>
        <form method="POST" action="{{ route('proveedor.actualizar', $proveedor) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Llena automáticamente los campos del formulario con los datos del producto -->
            <div>
                <label for="cirs">cirs:</label>
                <input name="cirs" type="text" value="{{ $proveedor->cirs }}">
            </div>

            <div>
                <label for="cirs">Nombre:</label>
                <input name="cirs" type="text" value="{{ $proveedor->celular }}">
            </div>


            <div>
                <button type="submit">Aceptar</button>
                <a href="{{ route('proveedor.index') }}">Volver</a>
            </div>
        </form> 
    </section>

@endsection
