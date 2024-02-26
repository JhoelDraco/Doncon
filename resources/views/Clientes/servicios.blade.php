
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
    
        <section> 
            <h1>SERVICIOS</h1>

        </section>
        <div class="container">
            <div class="card">
                <h2>Consultoría de Sistemas</h2>
                <p>Ofrecemos asesoramiento experto en la implementación y optimización de sistemas informáticos para mejorar la eficiencia y productividad de tu empresa.</p>
            </div>
            <div class="card">
                <h2>Mantenimiento Correctivo y Preventivo</h2>
                <p>Nuestros servicios de mantenimiento garantizan un funcionamiento óptimo de tus sistemas mediante intervenciones preventivas y resolución rápida de problemas.</p>
            </div>
            <div class="card">
                <h2>Diseño de Páginas Web</h2>
                <p>Creamos sitios web atractivos y funcionales que reflejen la identidad de tu marca y proporcionen una experiencia óptima para tus usuarios.</p>
            </div>
            <div class="card">
                <h2>Redes Estructuradas</h2>
                <p>Diseñamos e implementamos redes sólidas y seguras que garantizan una conectividad confiable y un rendimiento óptimo para tu empresa.</p>
            </div>
            <div class="card">
                <h2>Consultoría en Gestión de Calidad</h2>
                <p>Brindamos servicios de consultoría para ayudarte a implementar sistemas de gestión de calidad que mejoren la eficiencia y la satisfacción del cliente.</p>
            </div>
        </div>

        @include('Clientes.componentes.footer')
   
</body>
</html>