@extends('adminlte::page')

@section('css') 
    <link rel="stylesheet" href="{{asset('css/administrador.css')}}">
@stop



@section('title', 'crecionProducto')

@section('content')

    <section>
        <h3>VENTAS</h3>
        <form method="POST" action="{{route('venta.almacenar', $cliente->cliente_id)}}" >
            @csrf

            @include('administrador.ventas.components.formulario_ventas')
        </form>
    </section>

@endsection

@section('js')
    <script>

        const buscadorProducto = document.getElementById('buscadorProducto');
        const productoBuscado = document.getElementById('productoBuscado');

        //Inputs relacionados con el llenado de datos para la tabla
        const codigoProducto = document.getElementById('codigoProducto');
        const nombreProducto = document.getElementById('nombreProducto');
        const stockProducto = document.getElementById('stockProducto');
        const precioProducto = document.getElementById('precioProducto');
        const totalVenta = document.getElementById('totalVenta');

        const cantidadProducto = document.getElementById('cantidadProducto');
       
        var conteoVenta = 0;
        totalVenta.value = 0;

        productoBuscado.style.display = 'none';

        //Función para la lista de busqueda
        buscadorProducto.addEventListener('focus', function() {
            productoBuscado.style.display = 'block';
        });

        buscadorProducto.addEventListener('blur', function() {
            productoBuscado.style.display = 'none';
        });

        //Función para limpiar todos los inputs de producto
        function limpiarInputs() {
            var informacionProducto = document.getElementsByClassName("informacionProducto");
            for (var i = 0; i < informacionProducto.length; i++) {
                informacionProducto[i].value = "";
            }
        }

        //Funcion para ingresar nueva venta
        function agregarVenta(){
            var tablaVenta = document.getElementById("tablaVenta").getElementsByTagName('tbody')[0];
            var nuevaVenta = tablaVenta.insertRow();

            var cellCodigo = nuevaVenta.insertCell(0);
            var cellNombre = nuevaVenta.insertCell(1);
            var cellPrecio = nuevaVenta.insertCell(2);
            var cellCantidad = nuevaVenta.insertCell(3);
            var cellSubtotal = nuevaVenta.insertCell(4);

            var subtotal = parseFloat(cantidadProducto.value) * parseFloat(precioProducto.value);

            //console.log(subtotal);

            cellCodigo.innerHTML = '<label>' + codigoProducto.value + '</label>' +
                            '<input type="text" name="codigoProducto' + "[" + conteoVenta + "]" + '" value="'+ codigoProducto.value +'" hidden="true">';

            cellNombre.innerHTML = '<label>' + nombreProducto.value + '</label>';
            cellPrecio.innerHTML = '<label>' + precioProducto.value + '</label>';

            cellCantidad.innerHTML = '<label>' + cantidadProducto.value + '</label>' +
                            '<input type="text" name="cantidadProducto' + "[" + conteoVenta + "]" + '" value="'+ cantidadProducto.value +'" hidden="true">';
                            
            cellSubtotal.innerHTML = '<label>' + subtotal + '</label>' +
                            '<input type="text" name="subtotal' + "[" + conteoVenta + "]" + '" value="'+ subtotal +'" hidden="true">';

            totalVenta.value = parseFloat(subtotal) + parseFloat(totalVenta.value);

            conteoVenta++;
        }

    </script>
@stop