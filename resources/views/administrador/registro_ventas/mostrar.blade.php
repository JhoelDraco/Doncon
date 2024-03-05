@extends('adminlte::page')

@section('css')
    <link rel="stylesheet" href="{{asset('css/administrador.css')}}">
@stop

@section('js')
    
@stop

@section('title', 'index')


@section('content')

    <div>
        <!-- Información de usuario -->
        <div>
            <h4>Información de usuario</h4>
            <p><label for="">Nombre de usuario:</label></p>
            <p>{{$registroVenta->name}}</p>
            <p><label for="">Correo electronico:</label></p>
            <p>{{$registroVenta->email}}</p>
        </div>

        <!-- Información de la caja usuada -->
        <div>
            <h4>Información de caja</h4>
            <p><label for="">Numero de caja:</label> {{$registroVenta->id_caja}}</p>
        </div>

        <!-- Información de la venta -->
        <div>
            <h4>Información de la Venta</h4>
            <p><label for="">Fecha y hora de la venta:</label></p>
            <p>{{$registroVenta->fecha_hora}}</p>
            <p><label for="">Descripción de la venta:</label></p>
            <p>{{$registroVenta->descripcion}}</p>
        </div>

        <!-- Información de la venta -->
        <div>
            <h4>Información de la Factura</h4>
            <p><label for="">Numero de factura:</label></p>
            <p>{{$registroVenta->nro_factura}}</p>
            <p><label for="">Codigo de autorización:</label></p>
            <p>{{$registroVenta->codigo_autorizacion}}</p>
            <p><label for="">NIT de la empresa:</label></p>
            <p>{{$registroVenta->nit}}</p>
        </div>

        <!-- Información de productos vendidos -->
        <table>
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Nombre Producto</th>
                    <th>Precio unitario</th>
                    <th>Cantidad</th>
                    <th>Subtotal</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($productos as $producto)
                    <tr>
                        <td><label for="">{{$producto->codigo}}</label></td>
                        <td><label for="">{{$producto->nombre}}</label></td>
                        <td><label for="">{{$producto->precio}}</label></td>
                        <td><label for="">{{$producto->cantidad}}</label></td>
                        <td><label for="">{{$producto->subtotal}}</label></td>
                    </tr>
                @endforeach
                    <tr>
                        <th colspan="4">Total</th>
                        <td><label for="">{{$registroVenta->total}}</label></td>
                    </tr>
            </tbody>
        </table>
    </div>

@stop

