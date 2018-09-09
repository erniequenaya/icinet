@extends('layout')

@section('header')
  <div id="demo-1" data-zs-src='["images/1.jpg", "images/2.jpg"]' data-zs-overlay="dots">
      <div class="demo-inner-content">
          <div class="header-top">
              <header>
                  <div class="top-head ml-lg-auto text-center">
                        <!--<div class="row">
                          <div class="col-md-12 float-right">
                              <a href="{{route('logout')}}">
                                  <i class="fas fa-lock"></i> Cerrar sesión</a>
                          </div>
                        </div>-->

                        <div class="row">
                          <div class="col-md-6 float-left">

                            <a class="text-light">
                              <i class="fas fa-user"></i> {{saludarUsuario()}}</a>
                          </div>
                          <div class="col-md-6 float-right">

                            <a href="#" data-toggle="modal" data-target="#exampleModalCenter">
                              <i class="fas fa-lock"></i> Iniciar sesión</a>
                          </div>
                        </div>
                  </div>
                  <div class="clearfix"></div>
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

                              <li class="nav-item">
                                  <a class="nav-link {{(request()->route()->getName() == 'repositorio.index') ? 'active-navbar' : ''}}" href="{{route('repositorio.index')}}">Repositorio</a>
                              </li>

                              <li class="nav-item {{(request()->route()->getName() == 'contactanos') ? 'active' : ''}}">
                                  <a class="nav-link" href="{{route('contactanos')}}">Contactanos</a>
                              </li>
                          </ul>
                      </div>
                  </nav>
              </header>
          </div>
          <!--/banner-info-w3layouts-->
          <div class="banner-info-w3layouts text-center">
              <img src="{{asset('images/logo_icin.png')}}" style="width: 30%; height: auto;" alt="Ingenieria Civil en Informatica">
              <h3>
                  <span>La computación y la tecnología son parte de nuestras vidas.</span>
              </h3>
              <p>Crear soluciones en este nuevo mundo sin fronteras.</p>
          </div>
          <!--//banner-info-w3layouts-->
      </div>
  </div>
@endsection

@section('main')

  <!--/process-->
  <section class="banner-bottom-wthree pb-lg-5 pb-md-4 pb-3">
    <div class="container">
      <div class="inner-sec-w3ls py-lg-5  py-3">
    <!---728x90--->
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
                        <!--/job1-->
                          <div class="job-post-main row">
                              <div class="col-md-9 job-post-info text-left">
                                  <div class="job-post-icon">
                                      <i class="fas fa-briefcase"></i>
                                  </div>

                                  <div class="job-single-sec">
                                      <h4><a href="#">User Interface Project Manager</a></h4>
                                      <p class="my-2">Technology Management Consulting</p>
                                      <ul class="job-list-info d-flex">
                                          <li><i class="fas fa-briefcase"></i> Comera</li>
                                          <li><i class="fas fa-map-marker-alt"></i> California</li>
                                          <li><i class="fas fa-dollar-sign"></i> 300000 - 500000 / Annum</li>
                                      </ul>
                                  </div>

                                  <div class="clearfix"></div>

                              </div>

                              <div class="col-md-3 job-single-time text-right">
                                  <span class="job-time"><i class="far fa-heart"></i> Full Time</span>
                                  <a href="#" class="aply-btn ">Appy Now</a>
                              </div>
                          </div>
                        <!--//job1-->
                      </div>
                    </div>
                  </div>
                </div>
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
                  <h3 class="tittle text-center cen mb-lg-5 mb-3">¿Necesita una solucion informatica?</h3>
                  <div class="resume">
                      <a href="{{route('trabajamos_para_usted')}}"></i>Envienos su problema</a>
                  </div>
              </div>

          </div>
      </div>
  </section>
  <!--//job -->

  <!--/candidates -->
  <section class="banner-bottom-wthree bg-light py-lg-5 py-3 text-center">
      <div class="container">
          <div class="inner-sec-w3ls py-lg-4 py-md-4 py-3">
              <h3 class="tittle text-center mb-lg-5 mb-3">Jefe de carrera</h3>
              <div class="row mt-5">
                  <div class="col-lg-3 member-main text-center mx-auto d-block">
                      <div class="card">
                          <div class="card-body">
                              <div class="member-img">
                                  <img src="{{asset('images/jefe_carrera.png')}}" alt="Jefe de carrera" class="img-fluid rounded-circle">
                              </div>
                              <div class="member-info text-center py-lg-4 py-2">
                                  <h4>Jorgue Diaz Ramirez</h4>

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
