@extends('adminlte::page')

@section('css') 
    <link rel="stylesheet" href="{{asset('css/administrador.css')}}">
@stop



@section('title', 'crecionProducto')

@section('content')

    <section>
        <h3>VENTAS</h3>
        @can('admin.venta.crear')
            <form method="POST" action="{{route('venta.almacenar', $cliente->cliente_id)}}" >
                @csrf

                @include('administrador.ventas.components.formulario_ventas')
            </form>
        @endcan
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

        //Inputs relacionados con el cambio de moneda
        const totalVenta = document.getElementById('totalVenta');
        var cantidad_m = document.getElementById('cantidad_m').value;

        const cantidadProducto = document.getElementById('cantidadProducto');
        const dineroRecibido = document.getElementById('dineroRecibido');
        const cambioDar = document.getElementById('cambioDar');
       
        

        var conteoVenta = 0;
        totalVenta.value = 0;
        cantidad_m = parseInt(cantidad_m);

        productoBuscado.style.display = 'none';

        //Función para la lista de busqueda
        buscadorProducto.addEventListener('focus', function() {
            productoBuscado.style.display = 'block';
        });

        buscadorProducto.addEventListener('blur', function() {
            productoBuscado.style.display = 'none';
        });

        //Función para dar cambio
        dineroRecibido.addEventListener("keypress", function(event) {
        // Verificar si la tecla presionada es Enter (código 13)
            if (event.keyCode === 13) {
                // Aquí puedes ejecutar la acción que desees al presionar Enter
                var dinero = parseFloat(dineroRecibido.value);
                //Evitar que precione enter para enviarZ
                event.preventDefault();
                event.preventDefault();
                dinero = dinero.toFixed(2);
                cambioDar.value = parseFloat(dinero) - parseFloat(totalVenta.value);
            }
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
            var cellEliminar = nuevaVenta.insertCell(5);

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

            cellEliminar.innerHTML = "<button type='button' onclick='eliminarFila(this)'>Eliminar</button>";

            totalVenta.value = parseFloat(subtotal) + parseFloat(totalVenta.value);


            for(let i = 0; i < cantidad_m; i++){
                var moneda = document.getElementById('moneda' + i);
                var monedaMostrar = document.getElementById('mostrarMoneda' + i);
                
                var monto = parseFloat(totalVenta.value) / parseFloat(moneda.value);
                monedaMostrar.value = parseFloat(monto.toFixed(2));
            }

            conteoVenta++;
        }

        function eliminarFila(boton){
            var fila = boton.parentNode.parentNode;
            fila.parentNode.removeChild(fila);
        }

    </script>
@stop