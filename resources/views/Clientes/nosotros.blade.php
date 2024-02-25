
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
    
    <div class="container">
        <!----------------------->
    
        <!-- Esto es parte del catálogo esto capia -->
        <section class="row sections_cards">
            <div class="col-12">
                <h4 class="m-4">NOSOTROS</h4>
                <h4 class="m-4">TECNOLOGIA & CALIDAD</h4>
            </div>

        </section>
    
            <section1 class="card_novelty col-12 row d-flex align-items-stretch">
                <div class="card col-lg-3 col-sm-5 my-2 card_space" style="background-color: hsl(236, 37%, 64%);">
                    <img src="{{ asset('imagenes/asesoramientot1.jpg') }}" class="card-img-top" alt="Asesoramiento">
                    <div class="card-body">
                        <h5 class="card-title">Asesoramiento Personalizado</h5>
                        <p class="card-text">Recibe asesoramiento experto para optimizar tus procesos tecnológicos.</p>
                        <a href="#" class="btn btn-outline-dark">Más información</a>
                    </div>
                </div>
    
                <div class="card col-lg-3 col-sm-5 my-2 card_space" style="background-color: #a09d9d;">
                    <img src="{{ asset('imagenes/Calidad2Nosotros.jpg') }}" class="card-img-top" alt="Calidad">
                    <div class="card-body">
                        <h5 class="card-title">Garantía de Calidad</h5>
                        <p class="card-text">Nuestros productos pasan rigurosos controles de calidad para tu tranquilidad.</p>
                        <a href="#" class="btn btn-outline-dark">Más información</a>
                    </div>
                </div>
    
                <div class="card col-lg-3 col-sm-5 my-2 card_space" style="background-color:hsl(236, 37%, 64%)">
                    <img src="{{ asset('imagenes/Responsivo.jpg') }}" class="card-img-top" alt="Diseño Web">
                    <div class="card-body">
                        <h5 class="card-title">Diseño Web Responsivo</h5>
                        <p class="card-text">Desarrollamos sitios web modernos y adaptables a todos los dispositivos.</p>
                        <a href="#" class="btn btn-outline-dark">Más información</a>
                    </div>
                </div>
    
                <div class="card col-lg-3 col-sm-5 my-2 card_space" style="background-color: #a09d9d;">
                    <img src="{{ asset('imagenes/Mantenimientos1.jpg') }}" class="card-img-top" alt="Mantenimiento">
                    <div class="card-body">
                        <h5 class="card-title">Servicio de Mantenimiento</h5>
                        <p class="card-text">Ofrecemos mantenimiento preventivo y correctivo para tus sistemas.</p>
                        <a href="#" class="btn btn-outline-dark">Más información</a>
                    </div>
                </div>
            
        </section1>
    </div>
    
     <!----------------------->
     @include('Clientes.componentes.footer')

</body>
</html>