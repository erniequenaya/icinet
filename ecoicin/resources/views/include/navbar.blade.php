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
            <li class="nav-item {{(request()->route()->getName() == 'index') ? 'active' : ''}}">
                <a class="nav-link" href="{{route('index')}}">Inicio
                    <span class="sr-only">(current)</span>
                </a>
            </li>

            <li class="nav-item {{(request()->route()->getName() == 'quienes_somos') ? 'active' : ''}}">
                <a class="nav-link" href="{{route('quienes_somos')}}">¿Quienes somos?</a>
            </li>

            <li class="nav-item {{(request()->route()->getName() == 'trabajamos_para_usted') ? 'active' : ''}}">
                <a class="nav-link" href="">Trabajamos para usted</a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{(request()->route()->getName() == 'repositorio') ? 'active' : ''}}" href="how.html">Repositorio</a>
            </li>

            <li class="nav-item {{(request()->route()->getName() == 'contactanos') ? 'active' : ''}}">
                <a class="nav-link" href="how.html">Contactanos</a>
            </li>
        </ul>
    </div>
</nav>
