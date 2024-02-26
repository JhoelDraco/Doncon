
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

        <div class="col-12">
            <h4 class="m-4">Catalogo de Ordenadores</h4>
        </div>
        
        <section class="card_novelty col-12 row">
            @foreach ($productos as $producto)
                <div class="card col-lg-3 col-sm-5 my-2 card_space" style="background-color: #a09d9d;">
                    <img src="{{asset($producto->imagen)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h2 class="card-title">{{$producto->nombre}}</h2>
                    <h5 class="card-text">{{$producto->detalle}}</h5>
                    </div>
                </div>

            @endforeach

            <div class="card col-lg-3 col-sm-5 my-2 card_space" style="background-color: #a09d9d;">
            <img src="{{ asset('imagenes/Asesoramiento.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <a href="#" class="btn btn-outline-dark">Ver</a>
            </div>
            </div>

            <div class="card col-lg-3 col-sm-5 my-2 card_space" style="background-color: #a09d9d;">
            <img src="{{ asset('imagenes/Calidad.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <a href="#" class="btn btn-outline-dark">Ver</a>
            </div>
            </div>
            
        <div class="card col-lg-3 col-sm-5 my-2 card_space" style="background-color: #a09d9d;">
            <img src="{{ asset('imagenes/Diseno Web.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <a href="#" class="btn btn-outline-dark">Ver</a>
        </div>
            </div>

            <div class="card col-lg-3 col-sm-5 my-2 card_space" style="background-color: #a09d9d;">
            <img src="{{ asset('imagenes/Mantenimiento.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <a href="#" class="btn btn-outline-dark">Ver</a>
            </div>
            </div>

            <div class="card col-lg-3 col-sm-5 my-2 card_space" style="background-color: #a09d9d;">
            <img src="{{ asset('imagenes/navegador.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <a href="#" class="btn btn-outline-dark">Ver</a>
            </div>
            </div>

            <div class="card col-lg-3 col-sm-5 my-2 card_space" style="background-color: #a09d9d;">
            <img src="{{ asset('imagenes/Asesoramiento.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <a href="#" class="btn btn-outline-dark">Ver</a>
            </div>
            </div>
            
            <div class="card col-lg-3 col-sm-5 my-2 card_space" style="background-color: #a09d9d;">
            <img src="{{ asset('imagenes/header logo.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <a href="#" class="btn btn-outline-dark">Ver</a>
            </div>
            </div>

            <div class="card col-lg-3 col-sm-5 my-2 card_space" style="background-color: #a09d9d;">
            <img src="{{ asset('imagenes/tablet-791051_640.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <a href="#" class="btn btn-outline-dark">Ver</a>
            </div>s
            </div>

            <div class="card col-lg-3 col-sm-5 my-2 card_space" style="background-color: #a09d9d;">
            <img src="{{ asset('imagenes/conejos_3.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <a href="#" class="btn btn-outline-dark">Ver</a>
            </div>
            </div>

            <div class="card col-lg-3 col-sm-5 my-2 card_space" style="background-color: #a09d9d;">
            <img src="{{ asset('imagenes/conejos_3.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <a href="#" class="btn btn-outline-dark">Ver</a>
                </div>
            </div>

            <div class="card col-lg-3 col-sm-5 my-2 card_space" style="background-color: #a09d9d;">
            <img src="{{ asset('imagenes/conejos_3.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <a href="#" class="btn btn-outline-dark">Ver</a>
                </div>
            </div>

            <div class="card col-lg-3 col-sm-5 my-2 card_space" style="background-color: #a09d9d;">
            <img src="{{ asset('imagenes/conejos_3.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <a href="#" class="btn btn-outline-dark">Ver</a>
                </div>
            </div>
         
        </section>
    </section>

     <!----------------------->
     @include('Clientes.componentes.footer')

</body>
</html>