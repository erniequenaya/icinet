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

            <div class="mid-info mt-5">
                <h4 class="text-justify"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h4>
            </div>
        </div>
    </div>

    <div class="input-group container col-2 ">
      <div class="input-group-prepend">
        <label class="input-group-text" for="inputGroupSelect01">Idioma</label>
      </div>
      <select class="custom-select" id="idioma">
        <option selected value="espanol">Español</option>
        <option value="ingles">Ingles</option>
      </select>
    </div>

    <br>



    <form  class="form" method="post" action="{{route('mensajes')}}">
      {{ csrf_field() }}
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
                        <input class="form-check-input" type="radio" name="resp_{{$pregunta->id_pregunta}}" id="resp_{{$pregunta->id_pregunta}}a" value="a" required>
                        <label class="form-check-label" for="inlineRadio1">a) {{$pregunta->alt_a_ing}}.</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="resp_{{$pregunta->id_pregunta}}" id="resp_{{$pregunta->id_pregunta}}b" value="b" required>
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
    </form>

    <br>
  </section>
@endsection
