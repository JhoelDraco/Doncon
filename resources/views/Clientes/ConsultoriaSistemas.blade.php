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
                <h4 class="m-4">SEVICIOS</h4>
                <h4 class="m-4">CONSULTORIA DE SISTEMAS</h4>
            </div>

        </section>
        
        <h5 class="card-title">Asesoramiento Personalizado</h5>
        <img src="{{ asset('imagenes/asesoramientot1.jpg') }}" class="imagen" alt="Asesoramiento">
        <p class="card-text">Nuestros Servicios de Consultoría le permiten encontrar soluciones duraderas y adaptables en tecnología de la información con el fin de alcanzar sus objetivos de negocio y crecimiento sostenible. Trabajamos junto con usted para encontrar soluciones a problemas técnicos en las más diversas áreas.</p>
        
            
        
        
    </div>
    
     <!----------------------->
     @include('Clientes.componentes.footer')
  
     
</html>