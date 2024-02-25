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
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li> <img src="{{ asset('imagenes/header logo.jpg') }}" alt="header"></li> <!-- Ajusta la ruta de la imagen -->
                    <li class="nav-item"><a class="nav-link" id="INICIO" href="{{ route('inicio.inicio') }}">INICIO</a></li>
                    <li class="nav-item"><a class="nav-link" id="NOSOTROS" href="{{ route('nosotros') }}">NOSOTROS</a></li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="SERVICIOS.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SERVICIOS
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Soporte para impresoras</a>
                            <a class="dropdown-item" href="#">Soporte de Ordenadores</a>
                            <a class="dropdown-item" href="#">Otros</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            ARTICULOS
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                            <a class="dropdown-item" href="#">Artículo 1</a>
                            <a class="dropdown-item" href="#">Artículo 2</a>
                            <a class="dropdown-item" href="#">Artículo 3</a>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" id="CONTACTANOS" href="#">CONTACTANOS</a></li>
                    <li class="nav-item"><a class="nav-link" id="INGRESAR" href="">INGRESAR</a></li>
                </ul>
            </div>
            <div class="loader">
                <div class="loader-square"></div>
                <div class="loader-square"></div>
                <div class="loader-square"></div>
                <div class="loader-square"></div>
                <div class="loader-square"></div>
                <div class="loader-square"></div>
                <div class="loader-square"></div>
            </div>
        </nav>
    </header>
    
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
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
        </section2>
    </div>
        
    <footer>
        <div class="card-container">
            <h5>CONTACTANOS</h5>
            <h5>&COPY;.2024 REVIENTABACK</h5>

            <a class="socialContainer containerTwo" href="#">
              <svg viewBox="0 0 16 16" class="socialSvg FSvg">
                <path
                  d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"
                ></path>
              </svg>
            </a>
          
            <a class="socialContainer containerFour" href="#">
              <svg viewBox="0 0 16 16" class="socialSvg whatsappSvg">
                <path
                  d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"
                ></path>
              </svg>
            </a>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
