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
                    <li class="nav-items"><a class="nav-link" href="{{ route('artiordenadores.artiordenadores') }}">ARTICULOS</a>
                    <li class="nav-item dropdown">
                        
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SERVICIOS
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                            <a class="dropdown-item" href="{{ route('ConsultoriaSistemas.ConsultoriaSistemas') }}">Consultoria de Sistemas</a>
                            <a class="dropdown-item" href="{{ route('MantenimientoCorrectivoyPreventivo.MantenimientoCorrectivoyPreventivo') }}">Mantenimiento Correctivo y Preventivo</a>
                            <a class="dropdown-item" href="{{ route('DisenoPaginasWeb.DisenoPaginasWeb') }}">Diseno de Pagina Web</a>
                            <a class="dropdown-item" href="{{ route('RedesEstructuradas.RedesEstructuradas') }}">Redes Estructuradas</a>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" id="CONTACTANOS" href="{{ route('contactanos.contactanos') }}">CONTACTANOS</a></li>
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