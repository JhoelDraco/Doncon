
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Página Web</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/cssproyecto.css') }}"> <!-- Ajusta la ruta de tu archivo CSS -->
    <script src="{{ asset('projecto.js') }}"></script> <!-- Ajusta la ruta de tu archivo JavaScript -->
    <title>HINDEX</title>
</head>
<body>
    
    @include('Clientes.componentes.navbar')    

    <!----------------------->

    <!-- Esto es parte del catalogo esto capia -->
    <section class="row sections_cards">

        <div class="col-12" >
            <h4 class="m-4">Catalogo de Ordenadores</h4>
        </div>
            <input wire:model.live='productobuscar' placeholder="Buscar Producto" whire:model.live='productocodigo'> 
        <section class="card_novelty col-12 row">
            @foreach ($productos as $producto)

                <div class="card col-lg-3 col-sm-5 my-2 card_space" style="background-color: #ffffff;" >
                    <img src="{{asset($producto->imagen)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h2 class="card-title">{{$producto->nombre}}</h2>
                    <h5 class="card-text">{{$producto->detalle}}</h5>
                    </div>
                </div>

            @endforeach


         
        </section>
    </section>

     <!----------------------->
     @include('Clientes.componentes.footer')

</body>
</html>