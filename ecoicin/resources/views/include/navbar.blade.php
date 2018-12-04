<nav class="navbar navbar-expand-lg navbar-light">
    <div> <!--class="logo"-->
        <h1>
            <a class="navbar-brand" href="{{route('index')}}"><i class="fas fa-at" aria-hidden></i> UTA - ICIN</a>

            @auth
                @if (tipoUsuario() == 2)
                  <button class="btn celeste-uta text-light" type="button" name="button"><i class="fa fa-edit"></i></button>
                @endif
            @endauth
        </h1>
    </div>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">
            <i class="fas fa-bars"></i>
        </span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-lg-auto text-center">
            <li class="nav-item {{(request()->route()->getName() == 'index') ? 'active-navbar' : ''}}">
                <a class="nav-link" href="{{route('index')}}">Inicio
                    <span class="sr-only">(current)</span>
                </a>
            </li>

            <li class="nav-item {{(request()->route()->getName() == 'quienes_somos') ? 'active-navbar' : ''}}">
                <a class="nav-link" href="{{route('quienes_somos')}}">¿Quienes somos?</a>
            </li>

          <!--  Nav item SECCION EMPRESAS  -->

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Repositorio
                <i class="fas fa-angle-down"></i>
              </a>
              <div class="dropdown-menu text-center" aria-labelledby="navbarDropdown" style="display: none;">
                  <a class="dropdown-item" href="{{route('producto.index')}}" title="">Productos</a>
                  <a class="dropdown-item" href="{{route('documento.index')}}" title="">Documentos</a>
              </div>
            </li>


              <li class="nav-item {{(request()->route()->getName() == 'contactanos') ? 'active-navbar' : ''}}">
                <a class="nav-link" href="{{route('contactanos')}}">Contactanos</a>
              </li>


            @auth
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Acciones
                  <i class="fas fa-angle-down"></i>
                </a>
                <div class="dropdown-menu text-center" aria-labelledby="navbarDropdown" style="display: none;">
                  @if (tipoUsuario() == 1)
                    <a class="dropdown-item" href="{{route('administracion')}}" title="">Administracion</a>
                  @endif
                  @if (tipoUsuario() == 2)
                    <a class="dropdown-item" href="{{route('proyectos')}}" title="">Proyectos</a>
                  @endif
                </div>
              </li>
            @endauth
        </ul>
    </div>
</nav>
