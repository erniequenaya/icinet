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
      <select class="custom-select" id="inputGroupSelect01">
        <option selected value="1">Español</option>
        <option value="2">Ingles</option>
      </select>
    </div>

    <br>

    

    <form  class="form" method="post" action="{{route('mensajes')}}">
      {{ csrf_field() }}
        @for ($i = 0; $i < 44; $i++)
          <div class="container-fluid">
            <div class="row">
              <div class="container">
                <div class="card">
                  <div class="card-header font-weight-bold">{{ $i + 1 }}. I understand something better after I</div>
                  <div class="card-body">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1">a) try it out.</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                      <label class="form-check-label" for="inlineRadio2">b) think it through.</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <br>
        @endfor
      <input id="submit" class="btn btn-primary d-block mx-auto" name="submit" type="submit" value="Enviar">
    </form>

    <br>
  </section>
@endsection
