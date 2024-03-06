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
                <h4 class="m-4">Redes Estructuradas</h4>
            </div>

        </section>
      
        <h5 class="card-title">Asesoramiento Personalizado</h5>
        <img src="{{ asset('imagenes/RedesEstructura.jpg') }}" class="imagen" alt="Asesoramiento">
        <p class="card-text">Sistemas de infraestructura organizados y estandarizados, compuestos por componentes físicos y lógicos, diseñados para facilitar la comunicación eficiente y confiable de datos entre dispositivos dentro de una organización, garantizando flexibilidad, rendimiento óptimo y facilidad de mantenimiento y expansión.</p>
        
        
        <section2>
            <h3>SERVICIOS QUE OFRECEMOS</h3>
            <div class="card-deck">
                <div class="card">
                    <img src="{{ asset('imagenes/Redplan.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title">Diseño y planificación de redes</h2>
                        <p class="card-text">Desarrollo de arquitecturas de red adaptadas a las necesidades específicas de la organización, considerando la distribución de dispositivos y el flujo de datos.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="{{ asset('imagenes/tarjeta2Red.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title">Instalación y configuración de infraestructura</h2>
                        <p class="card-text">Implementación física de componentes de red, como cables, switches y routers, junto con la configuración de parámetros de red para asegurar su funcionamiento óptimo.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="{{ asset('imagenes/tarjeta3Red.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title">Mantenimiento y soporte técnico</h2>
                        <p class="card-text">Monitoreo continuo de la red, diagnóstico y resolución de problemas, actualizaciones de software y documentación de la infraestructura para garantizar un rendimiento confiable y seguro.</p>
                    </div>
                </div>
              
            </div>
        </section2>
        
    </div>
    
     <!----------------------->
     @include('Clientes.componentes.footer')
  
     
</html>