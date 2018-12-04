@extends('layout')

@section('header')
  <div id="demo-1" data-zs-src='["images/1.jpg", "images/2.jpg"]' data-zs-overlay="dots">
      <div class="demo-inner-content">
          <div class="header-top">
              <header>
                  <div class="top-head ml-lg-auto text-center">

                        <div class="row">
                          <div class="col-md-6 float-left">

                            <a class="text-light">
                              <i class="fas fa-user"></i> {{saludarUsuario()}}</a>
                          </div>
                            <div class="col-md-6 float-right">
                              @guest
                                <a href="#" data-toggle="modal" data-target="#exampleModalCenter">
                                  <i class="fas fa-lock"></i> Iniciar sesión</a>

                              @endguest
                              @auth
                                <a href="{{route('logout')}}">
                                    <i class="fas fa-lock"></i> Cerrar sesión</a>
                              @endauth
                            </div>
                        </div>
                  </div>
                  <div class="clearfix"></div>
                  <nav class="navbar navbar-expand-lg navbar-light">
                      <div> <!--class="logo"-->
                          <h1>
                              <a class="navbar-brand" href="{{route('index')}}"><i class="fas fa-at" aria-hidden></i> UTA - ICIN </a>
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

                            <!--  NAV ITEM SECCION EMPRESAS-->

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


                                <li class="nav-item {{(request()->route()->getName() == 'contactanos') ? 'active' : ''}}">
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
              </header>
              <!--/banner-info-w3layouts-->
              <div class="banner-info-w3layouts text-center">
                  <img src="{{asset('images/logo_icin.png')}}" style="width: 30%; height: auto;" alt="Ingenieria Civil en Informatica">
                  @auth
                      @if (tipoUsuario() == 2)
                        &nbsp;<button class="btn celeste-uta text-light" type="button" name="button"><i class="fa fa-edit"></i></button>
                      @endif
                  @endauth
                  <h3>
                      <span>La computación y la tecnología son parte de nuestras vidas.</span>
                  </h3>
                  <p>Crear soluciones en este nuevo mundo sin fronteras.</p>
              </div>
              <!--//banner-info-w3layouts-->
          </div>
</div>
      </div>
@endsection

@section('main')

  <!--/process-->
  <section class="banner-bottom-wthree pb-lg-5 pb-md-4 pb-3">
    <div class="container">
      <div class="inner-sec-w3ls py-lg-5  py-3">
    <!---728x90--->
                         @isset($proyecto)
                           <h3 class="tittle text-center mb-lg-4 mb-3">Ultimos proyectos realizados</h3>
                           <!---728x90--->
                             <div class="tabs mt-5">
                                 <ul class="nav nav-pills my-4" id="pills-tab" role="tablist">
                                     <li class="nav-item mx-auto d-block">
                                       <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Proyectos</a>
                                     </li>
                                 </ul>

                                 <div class="tab-content" id="pills-tabContent">
                                   <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                     <div class="menu-grids mt-4">
                                       <div class="row t-in">
                                         <div class="col-lg-8 text-info-sec mx-auto d-block">
                            <div class="row populor_category_grids mt-5">
                                <div class="col-md-12 category_grid">
                                    <div class="view view3 view-tenth">
                                        <div class="category_text_box">
                                            <i class="fas fa-users"></i>
                                            <h3>{{$proyecto->nombre_proyecto}}</h3>
                                            <p>{{$proyecto->autores_proyecto}}</p>
                                        </div>
                                        <div class="mask">
                                            <a href="#">
                                                <img src="images/1.jpg" class="img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>
                                  </div>
                            </div>
                          @endisset
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <br><br>
              @auth
                  @if (tipoUsuario() == 2)
                    <h3 class="tittle text-center">Calendario ICIN <button class="btn celeste-uta text-light" type="button" name="button"><i class="fa fa-edit"></i></button></h3>
                  @endif
              @endauth
              <div class="container responsiveCal">
                <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=2&amp;bgcolor=%23FFFFFF&amp;src=2icpl7rs955s8ebga4smimncro%40group.calendar.google.com&amp;color=%238C500B&amp;src=es.cl%23holiday%40group.v.calendar.google.com&amp;color=%23125A12&amp;ctz=America%2FSantiago" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
              </div>
            </div>
          </div>
        </div>
  </section>
  <!--//preocess-->

  <!--job -->
  <section class="banner-bottom-wthree mid py-lg-5 py-3">
      <div class="container">
          <div class="inner-sec-w3ls py-lg-5  py-3">
              <div class="mid-info text-center pt-3">
                  <h3 class="tittle text-center cen mb-lg-5 mb-3">¿Necesita una solucion informatica? @auth
                      @if (tipoUsuario() == 2)
                        <button class="btn celeste-uta text-light" type="button" name="button"><i class="fa fa-edit"></i></button>
                      @endif
                  @endauth</h3>
              <!--   REDIRECCION SECCION EMPRESAS  -->
              </div>

          </div>
      </div>
  </section>
  <!--//job -->

  <!--/candidates -->
  <section class="banner-bottom-wthree bg-light py-lg-5 py-3 text-center">
      <div class="container">
          <div class="inner-sec-w3ls py-lg-4 py-md-4 py-3">
              <h3 class="tittle text-center mb-lg-5 mb-3">Jefe de carrera
                @auth
                  @if (tipoUsuario() == 2)
                    <button class="btn celeste-uta text-light" type="button" name="button"><i class="fa fa-edit"></i></button>
                  @endif
              @endauth</h3>
              <div class="row mt-5">
                  <div class="col-lg-3 member-main text-center mx-auto d-block">
                      <div class="card">
                          <div class="card-body">
                              <div class="member-img">
                                  <img src="{{asset('images/jefe_carrera.png')}}" alt="Jefe de carrera" class="img-fluid rounded-circle">
                              </div>
                              <div class="member-info text-center py-lg-4 py-2">
                                  <h4>Jorge Diaz Ramirez</h4>

                                  <p class="my-4">Jefe Carrera IECI-ICIN Universidad de Tarapacá, EUIIIS Iquique-Chile</p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!--/candidates -->
@endsection
