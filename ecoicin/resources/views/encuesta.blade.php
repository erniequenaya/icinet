@extends('layout')

@include('include/header')

@section('main')
  <ol class="breadcrumb justify-content-left">
      <li class="breadcrumb-item">
          <a href="{{route('index')}}">Inicio</a>
      </li>
      <li class="breadcrumb-item active">'Encuesta'</li>
  </ol>
  <!-- banner-text -->
  <section class="banner-bottom-wthree">

    <!-- <h3 class="tittle text-center mb-lg-5 mb-3">.</h3> -->



    <div class="container">
        <div class="inner-sec-w3ls py-lg-5   py-md-3 py-3">
            <h3 class="tittle text-center mb-lg-5 mb-3">Encuesta sobre estilos de aprendizaje
              @auth
                  @if (tipoUsuario() == 2)
                    <button class="btn celeste-uta text-light" type="button" name="button"><i class="fa fa-edit"></i></button>
                  @endif
              @endauth
            </h3>

        </div>
    </div>


    <form class="form" action="{{'encuesta/responder'}}" method="post">

      <div class="text-center" id="cargar">
        <div class="spinner-border" role="status">
          <span class="sr-only">Loading...</span>
        </div>
      </div>

      <div id="consentimiento">

        <div class="container">
          <h4 class="text-center"></i>Terminos y condiciones de usos.</h4><br>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <br>

          <div id="">
            <div class="container-fluid">
              <div class="row">
                <div class="container">
                  <div class="card">
                    <div class="card-header">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="consent">
                        <label class="form-check-label" for="inlineRadio1">Acepto los terminos y condiciones de uso.</label>
                      </div>
                    </div>
                    <div class="card-body">

                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="">Nombre</label>
                          <input type="text" class="form-control" name="nombre" placeholder="Miguel">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="">Apellido</label>
                          <input type="text" class="form-control" name="apellido" placeholder="Pinto">
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="ciudad">Ciudad</label>
                          <input type="text" class="form-control" name="ciudad" placeholder="Iquique">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="inputState">Genero</label>
                          <select name="genero" class="form-control">
                            <option selected>Seleccionar...</option>
                            <option value="m">Masculino</option>
                            <option value="f">Femenino</option>
                          </select>
                        </div>
                        <div class="form-group col-md-2">
                          <label for="inputState">Edad</label>
                          <select name="edad" class="form-control">
                            <option selected>Seleccionar...</option>
                            @for ($e=12; $e < 100; $e++)
                              <option value="{{$e}}">{{$e}}</option>
                            @endfor
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <br>
          </div>
          <!--<input id="submit" class="btn btn-primary d-block mx-auto" name="submit" type="submit" value="Enviar">-->
        <button type="button" id="btn_consentimiento" class="btn btn-primary d-block mx-auto" form="formConsentimiento" value="Submit" >Siguiente</button>
      </div>

      <div id="cuestionario">

        <div class="container">
          <h4 class="text-justify"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h4>
        </div>

        <br>

        {{ csrf_field() }}
        <div class="input-group container col-2 ">
          <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">Idioma</label>
          </div>
          <select class="custom-select" id="idioma" name='idioma'>
            <option selected value="espanol">Español</option>
            <option value="ingles">Ingles</option>
          </select>
        </div>

        <br>
        <div id="espanol">
          @forelse ($preguntas as $pregunta)
            <div class="container-fluid">
              <div class="row">

                <div class="container">
                  <div class="card">
                    <div class="card-header font-weight-bold">{{$pregunta->id_pregunta}}. {{$pregunta->enun_esp}}:</div>
                    <div class="card-body">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="resp_{{$pregunta->id_pregunta}}" id="resp_{{$pregunta->id_pregunta}}a" value="a">
                        <label class="form-check-label" for="inlineRadio1">a) {{$pregunta->alt_a_esp}}.</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="resp_{{$pregunta->id_pregunta}}" id="resp_{{$pregunta->id_pregunta}}b" value="b">
                        <label class="form-check-label" for="inlineRadio2">b) {{$pregunta->alt_b_esp}}.</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


            </div>


            <br>
          @empty
            <h1>Estamos trabajando para usted.</h1>
          @endforelse
        </div>

        <div id="ingles">
          @forelse ($preguntas as $pregunta)
            <div class="container-fluid">
              <div class="row">

                <div class="container">
                  <div class="card">
                    <div class="card-header font-weight-bold">{{$pregunta->id_pregunta}}. {{$pregunta->enun_ing}}:</div>
                    <div class="card-body">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="resp_{{$pregunta->id_pregunta}}" value="a" required>
                        <label class="form-check-label" for="inlineRadio1">a) {{$pregunta->alt_a_ing}}.</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="resp_{{$pregunta->id_pregunta}}" value="b" required>
                        <label class="form-check-label" for="inlineRadio2">b) {{$pregunta->alt_b_ing}}.</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <br>
          @empty
            <h1>Estamos trabajando para usted.</h1>
          @endforelse
        </div>
        <input id="submit" class="btn btn-primary d-block mx-auto" name="submit" type="submit" value="Enviar">
      </div>



    </form>

    <br>
  </section>
@endsection

@section('script')
  <script type="text/javascript">
    $(document).ready(function() {
      $('#cuestionario').hide();
    });

    $(document).on('click', '#btn_consentimiento', function(){
      $('#consentimiento').fadeOut(500);
      $('#cargar').show();
      setTimeout(function(){
        $('#cargar').hide();
        $('#cuestionario').fadeIn();
      }, 1000);
    });
  </script>
@endsection
