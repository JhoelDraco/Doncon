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
                <h4 class="m-4">Mantenimiento</h4>
            </div>

        </section>
        <h5 class="card-title">Asesoramiento Personalizado</h5>
        <img src="{{ asset('imagenes/mantenimiento1.jpg') }}" class="imagen" alt="Asesoramiento">
        <p class="card-text">Mantenimiento de Equipos: Garantizando su Rendimiento Óptimo

            En nuestra empresa, nos tomamos en serio el cuidado de nuestros equipos. Nuestro enfoque se divide en dos aspectos clave:
            
            Corrección Eficiente:
            Cuando surge un problema, actuamos con prontitud para solucionarlo. Nuestro equipo de expertos identifica y resuelve cualquier fallo o avería de manera rápida y eficaz, asegurando que sus operaciones continúen sin interrupciones significativas.
            
            Prevención Proactiva:
            Adoptamos un enfoque preventivo para evitar problemas antes de que ocurran. A través de inspecciones regulares, mantenimiento planificado y medidas proactivas, prolongamos la vida útil de los equipos y minimizamos los tiempos de inactividad no planificados.
            
            En resumen, nuestro compromiso con el mantenimiento de equipos garantiza su fiabilidad, disponibilidad y rendimiento óptimo, lo que se traduce en operaciones más eficientes y clientes satisfechos. Confíe en nosotros para mantener sus equipos en condiciones óptimas para el éxito continuo de su negocio.</p>
        
        <section2>
            <h3>SERVICIOS QUE OFRECEMOS</h3>
            <div class="card-deck">
                <div class="card">
                    <img src="{{ asset('imagenes/tarjetamantenimiento.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title">Eliminacion de Virus y Malware</h2>
                        <p class="card-text">Nuestro servicio de eliminación de virus y malware está diseñado para proteger su sistema contra amenazas cibernéticas. Utilizando herramientas especializadas y experiencia técnica, identificamos y eliminamos cualquier software malicioso que pueda comprometer la seguridad de su equipo. Confíe en nosotros para mantener su sistema libre de virus y proteger sus datos críticos contra cualquier intrusión no deseada</p>
                    </div>
                </div>
                <div class="card">
                    <img src="{{ asset('imagenes/tarjetaoperativo.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title">Restauracion de Sistema Operativo</h2>
                        <p class="card-text">Nuestro servicio de restauración del sistema operativo está diseñado para devolverle la funcionalidad a su equipo. Utilizando técnicas avanzadas y experiencia en sistemas, restauramos su sistema operativo a un estado funcional óptimo. Confíe en nosotros para recuperar la estabilidad y el rendimiento de su sistema, asegurando así la continuidad de sus operaciones.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="{{ asset('imagenes/tarjetarecuperacion.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title">Recuperacion de Datos</h2>
                        <p class="card-text">Nuestro servicio de recuperación de datos está dedicado a restaurar la información valiosa que pueda haberse perdido. Utilizando herramientas especializadas y conocimientos técnicos, trabajamos para recuperar sus datos de manera rápida y efectiva. Confíe en nosotros para recuperar sus archivos importantes y mantener la integridad de su información crítica.</p>
                    </div>
                </div>
              
            </div>
        </section2>
        
    </div>
    
     <!----------------------->
     @include('Clientes.componentes.footer')
  
     
</html>