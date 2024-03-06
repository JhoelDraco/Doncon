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
        <img src="{{ asset('imagenes/MisionVision.jpg') }}" class="imagen" alt="Asesoramiento">
        <p class="card-text">Somos una empresa de tecnología que simplifica la vida cotidiana mediante soluciones innovadoras y accesibles, siendo preferidos por nuestra atención centrada en el cliente y nuestra constante búsqueda de la excelencia en cada experiencia.</p>
        
    
        <!-- Sección para misión y visión -->
        <aside class="row mission_vision_section">
            <div class="col-md-6 mission_card">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Misión</h5>
                        <p class="card-text">Impulsar la innovación tecnológica para transformar la vida de las personas, ofreciendo soluciones inteligentes y accesibles que simplifiquen y enriquezcan su día a día.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 vision_card">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Visión</h5>
                        <p class="card-text">Ser líderes en la creación de tecnología disruptiva que inspire el progreso y promueva un futuro conectado, donde cada individuo tenga el poder de alcanzar su máximo potencial a través de la tecnología.</p>
                    </div>
                </div>
            </div>
        </aside>
        
        <!-- Fin de sección para misión y visión -->
        
    </div>
    
     <!----------------------->
     @include('Clientes.componentes.footer')
  
</body>
</html>
