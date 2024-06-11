<header class="header_section">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="index.html">
          <img src="images/logo.png" alt="">
          <span>
            DONCON
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
            <ul class="navbar-nav  ">
                <li class="nav-item"><a class="nav-link" id="INICIO" href="{{ route('inicio.inicio') }}">INICIO</a></li>
              <li class="nav-item">
                <a class="nav-link" id="NOSOTROS" href="{{ route('nosotros.nosotros') }}">NOSOTROS</a>

              </li>
              <li class="nav-item">
                <a  class="nav-link" id="ARTICULOS" href="{{ route('artiordenadores.artiordenadores') }}">ARTICULOS</a>
              </li>
              <li class="nav-item"><a class="nav-link" id="INGRESAR" href="{{ route('login') }}">INGRESAR</a></li>
             
            </ul>
            <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
              <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
            </form>
          </div>
          <div class="quote_btn-container  d-flex justify-content-center">
            <a href="">
              CELULAR:69933781
            </a>
          </div>
        </div>
      </nav>
    </div>
  </header>