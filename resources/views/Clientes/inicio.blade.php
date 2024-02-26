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
        <section>
            <h1>Bienvenidos al corazón de la innovación tecnológica!</h1>
        </section>
        <section1>
            <h3>PORQUE NOS PREFIERES</h3>
            <div class="card-deck">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Trabaja Con Profesionales</h5>
                        <p class="card-text">Ofrecemos servicios de diseño web personalizado para empresas y particulares.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Servicios Integrales</h5>
                        <p class="card-text">Proporcionamos mantenimiento técnico y soporte continuo para garantizar el funcionamiento óptimo de tus sistemas.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Calidad de Servicios</h5>
                        <p class="card-text">Brindamos servicios de consultoría en tecnología para ayudarte a tomar decisiones informadas sobre tus sistemas y proyectos.</p>
                    </div>
                </div>
            </div>
        </section1>
        
        <section2>
            <h3>SERVICIOS QUE OFRECEMOS</h3>
            <div class="card-deck">
                <div class="card">
                    <img src="{{ asset('imagenes/tarjeta1.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title">Diseno y Desarollo Web</h2>
                        <p class="card-text">Se Realiza el diseno y funciones de una aplicacion web</p>
                    </div>
                </div>
                <div class="card">
                    <img src="{{ asset('imagenes/tarjeta2.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title">Hardware</h2>
                        <p class="card-text">Se realiza soporte tecnico de equipos</p>
                    </div>
                </div>
                <div class="card">
                    <img src="{{ asset('imagenes/tarjeta3.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title">Asesoramiento</h2>
                        <p class="card-text">Se da asesoramiento profesional sobre prevencion y manejo de equipos</p>
                    </div>
                </div>
                <div class="card">
                    <img src="{{ asset('imagenes/tarjeta4.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title">Nuevo Servicio</h2>
                        <p class="card-text">Se realiza la venta de nueva tecnologia para su equipo</p>
                    </div>
                </div>
                <div class="card">
                    <img src="{{ asset('imagenes/tarjeta5.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title">Articulos</h2>
                        <p class="card-text">Realizamos la venta de ordenadores y productos de tecnologia</p>
                    </div>
                </div>
            </div>
        </section2>
    </div>
        
    @include('Clientes.componentes.footer')

  
</body>
</html>
