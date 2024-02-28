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
                <h4 class="m-4">CONTACTANOS</h4>
            </div>

        </section>
            <img src="{{ asset('imagenes/contactanos.jpg') }}" class="imagen" alt="Asesoramiento">
            <h5 class="card-title">Contactanos</h5>
                    <p class="card-text">"En Tic&Centec, estamos comprometidos a proporcionar soluciones personalizadas y de alta calidad para satisfacer las necesidades de nuestros clientes. Nuestro equipo experto está aquí para ayudarte en cada paso del camino, ya sea que necesites asesoramiento profesional, una consulta gratuita o estés listo para comenzar tu próximo proyecto. Nos esforzamos por ofrecer un servicio excepcional y una comunicación clara y transparente en todo momento. ¡Contáctanos hoy y descubre cómo podemos ayudarte a alcanzar tus objetivos!".</p>
        <section>
            
        </section>
        
    </div>
     @include('Clientes.componentes.footer')
  
     
</html>