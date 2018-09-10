<nav class="navbar navbar-expand-lg navbar-light">
    <div> <!--class="logo"-->
        <h1>
            <a class="navbar-brand" href="{{route('index')}}"><i class="fas fa-at" aria-hidden></i> UTA - ICIN</a>
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

            <li class="nav-item {{(request()->route()->getName() == 'trabajamos_para_usted') ? 'active-navbar' : ''}}">
                <a class="nav-link" href="{{route('trabajamos_para_usted')}}">Trabajamos para usted</a>
            </li>

            <li class="nav-item {{(request()->route()->getName() == 'repositorio.index') ? 'active-navbar' : ''}}">
                <a class="nav-link" href="{{route('repositorio.index')}}">Repositorio</a>
            </li>

            @guest
              <li class="nav-item {{(request()->route()->getName() == 'contactanos') ? 'active-navbar' : ''}}">
                <a class="nav-link" href="{{route('contactanos')}}">Contactanos</a>
              </li>
            @endguest

            @auth
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Acciones
                  <i class="fas fa-angle-down"></i>
                </a>
                <div class="dropdown-menu text-center" aria-labelledby="navbarDropdown" style="display: none;">
                  @if (tipoUsuario() != 2)
                    <a class="dropdown-item" href="{{route('encuestas')}}" title="">Encuestas</a>
                  @endif
                  @if (tipoUsuario() == 2)
                    <a class="dropdown-item" href="{{route('administracion')}}" title="">Administracion</a>
                  @endif
                  @if (tipoUsuario() == 3)
                    <a class="dropdown-item" href="{{route('proyectos')}}" title="">Proyectos</a>
                    <a class="dropdown-item" href="{{route('empresas')}}" title="">Solicitudes</a>
                  @endif
                </div>
              </li>
            @endauth
        </ul>
    </div>
</nav>
