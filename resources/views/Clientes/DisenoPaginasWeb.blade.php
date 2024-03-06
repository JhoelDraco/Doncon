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
                <h4 class="m-4">Diseño de Paginas Web</h4>
            </div>

        </section>
        <h5 class="card-title">Asesoramiento Personalizado</h5>
        <img src="{{ asset('imagenes/disenio.jpg') }}" class="imagen" alt="Asesoramiento">
        <p class="card-text">Nuestro servicio de diseño web se enfoca en construir una presencia en línea impactante para su negocio. Con una combinación de creatividad y experiencia técnica, creamos sitios web atractivos y funcionales que cautivan a su audiencia y promueven su marca. Confíe en nosotros para diseñar una experiencia digital única que refleje la esencia de su negocio y lo destaque en el mundo en línea..</p>
        
        
        <section2>
            <h3>SERVICIOS QUE OFRECEMOS</h3>
            <div class="card-deck">
                <div class="card">
                    <img src="{{ asset('imagenes/tarjetadisenio.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title">Diseño de sitios web</h2>
                        <p class="card-text">: Creación de diseños visualmente atractivos y funcionales que consideren la estética, la usabilidad y la experiencia del usuario.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="{{ asset('imagenes/usuarios.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title">Desarrollo de la experiencia del usuario (UX)</h2>
                        <p class="card-text">Creación de una experiencia de usuario óptima, garantizando que el sitio web sea intuitivo y fácil de usar.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="{{ asset('imagenes/busqueda.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title">Optimización para motores de búsqueda (SEO)</h2>
                        <p class="card-text">Implementación de prácticas de diseño y desarrollo que mejoren la visibilidad del sitio web en los resultados de búsqueda de los motores de búsqueda, como Google.</p>
                    </div>
                </div>
              
            </div>
        </section2>
        
        
    </div>
    
     <!----------------------->
     @include('Clientes.componentes.footer')
  
     
</html>