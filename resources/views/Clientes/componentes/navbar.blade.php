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
                    <li class="nav-item">
                    <a class="nav-link" id="NOSOTROS" href="{{ route('nosotros.nosotros') }}">NOSOTROS</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            ARTICULOS
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('articulos.articulos') }}">Venta de impresoras</a>
                            <a class="dropdown-item" href="{{ route('artiordenadores.artiordenadores') }}">Venta de Ordenadores</a>
                            <a class="dropdown-item" href="#">Otros</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SERVICIOS
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                            <a class="dropdown-item" href="#">Servicios de Correccion y prevencion</a>
                            <a class="dropdown-item" href="#">Servicios de Mantenimiento</a>
                            <a class="dropdown-item" href="#">Servicio de Infrestructura</a>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" id="CONTACTANOS" href="#">CONTACTANOS</a></li>
                    <li class="nav-item"><a class="nav-link" id="INGRESAR" href="{{ route('login') }}">INGRESAR</a></li>
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