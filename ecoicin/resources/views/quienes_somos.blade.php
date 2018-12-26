@extends('layout')

@include('include/header')

@section('main')


                              @auth
                                    <!-- cargar el ckeditor-->
                                  @if (tipoUsuario() == 2)
                                        <script src="{{ asset('/vendor/ckeditor/ckeditor.js') }}"></script>
                                  @endif
                              @endauth



  <ol class="breadcrumb justify-content-left">
      <li class="breadcrumb-item">
          <a href="{{route('index')}}">Inicio</a>
      </li>
      <li class="breadcrumb-item active">'Quienes somos?'</li>
  </ol>
  <!-- banner-text -->
  <!--job -->
  <section class="banner-bottom-wthree ">
      <div class="container">
          <div class="inner-sec-w3ls py-lg-5   py-md-3 py-3">
              <h3 class="tittle text-center mb-lg-5 mb-3">Organigrama institucional
                @auth
                    @if (tipoUsuario() == 2)
                      <button class="btn celeste-uta text-light" type="button" name="button"><i class="fa fa-edit"></i></button>
                    @endif
                @endauth
              </h3>

              <div class="mid-info text-center mt-5">
                  <div class="parent-chart">
                      <div class="level lev-one top-level">
                          <div class="flow-position">
                              <img src="{{asset('images/jefe_carrera.png')}}" alt=" " class="img-fluid rounded-circle">
                              <br>
                              <strong>Jorge Diaz Ramirez</strong>
                              <br> Jefe de carrera
                          </div>
                      </div>
                      <div class="flow-chart">
                          <div class="level lev-two last-lev">
                              <div class="flow-position">
                                  <img src="images/s2.jpg" alt=" " class="img-fluid rounded-circle">
                                  <br>
                                  <strong>1.Job Vacancy</strong>
                                  <br> Lorem ipsum
                              </div>

                              <div class="flow-position">
                                  <img src="images/s3.jpg" alt=" " class="img-fluid rounded-circle">
                                  <br>
                                  <strong>2. Job Analysis
                                  </strong>
                                  <br> Lorem ipsum
                              </div>

                              <div class="flow-position">
                                  <img src="images/s4.jpg" alt=" " class="img-fluid rounded-circle">
                                  <br>
                                  <strong>3. Attracting Candidates
                                  </strong>
                                  <br> Lorem ipsum
                              </div>

                              <div class="flow-position">
                                  <img src="images/s5.jpg" alt=" " class="img-fluid rounded-circle">
                                  <br>
                                  <strong>4.Screening </strong>
                                  <br> Lorem ipsum
                              </div>

                              <div class="flow-position">
                                  <img src="images/s6.jpg" alt=" " class="img-fluid rounded-circle">
                                  <br>
                                  <strong>5.Interviewing Candidates
                                  </strong>
                                  <br> Lorem ipsum
                              </div>

                              <div class="flow-position">
                                  <img src="images/s7.jpg" alt=" " class="img-fluid rounded-circle">
                                  <br>
                                  <strong>6.Selecting</strong>
                                  <br> Lorem ipsum
                              </div>

                              <div class="flow-position">
                                  <img src="images/s8.jpg" alt=" " class="img-fluid rounded-circle">
                                  <br>
                                  <strong>7.Employee Evaluation
                                  </strong>
                                  <br> Lorem ipsum
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

          </div>
      </div>
  </section>
  <!--//job -->

  <section class="banner-bottom-wthree">
      <div class="container">
          <div class="inner-sec-w3ls">
              <h3 class="tittle text-center mb-lg-5 mb-3">Perfil de egreso
                @auth
                    @if (tipoUsuario() == 2)
                      <button class="btn celeste-uta text-light" type="button" name="button"><i class="fa fa-edit"></i></button>
                    @endif
                @endauth
              </h3>

              <div class="mid-info mt-5">



        @if (tipoUsuario() == 2)
    @auth
    <form action="{{ route('ckeditor/guardar') }}" method="get" id="formPerfil">

        <textarea name="quienesSomosPerfil" id="quienesSomosPerfil" contenteditable="true" required>
        {{ App\Contenido::where('cont_secc','quienesSomosPerfil')->value('cont_con') }}
        </textarea>
        <script>
            //CKEDITOR.replace('quienesSomosPerfil');
            CKEDITOR.disableAutoInline=true;
            CKEDITOR.inline('quienesSomosPerfil');
        </script>
    </form>
        <button type="submit" form="formPerfil" value="Submit" class="btn celeste-uta text-light mx-auto d-block"><i class="fa fa-edit"></i></button>
    @endauth
        @else
        {!! App\Contenido::where('cont_secc','quienesSomosPerfil')->value('cont_con')  !!}
        @endif


              </div>

          </div>
      </div>
  </section>

  <section class="banner-bottom-wthree py-lg-5 py-md-4  py-3">
      <div class="container">
          <div class="inner-sec-w3ls py-lg-5   py-md-3 py-3">
              <h3 class="tittle text-center mb-lg-5 mb-3">Malla curricular
                @auth
                    @if (tipoUsuario() == 2)
                      <button class="btn celeste-uta text-light" type="button" name="button"><i class="fa fa-edit"></i></button>
                    @endif
                @endauth
              </h3>

              <img src="{{asset('images/malla_curricular.png')}}" alt="Malla curricular" class="img-fluid">

          </div>
      </div>
  </section>
@endsection
