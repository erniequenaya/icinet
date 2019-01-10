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
                <h4 class="text-center"></i>Terminos y condiciones de usos.</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
    </div>

    <form  class="form" method="post" action="{{route('mensajes')}}">
      {{ csrf_field() }}
      <div id="espanol">
        <div class="container-fluid">
          <div class="row">
                <div class="container">
                  <div class="card">
                    <div class="card-body">
                      <div class="input-group mb-3">
                        <div class="input-group-append">
                          <span class="input-group-text" id="basic-addon2">Nombre</span>
                        </div>
                        <input type="text" class="form-control" name="" id="">
                      </div>

                      <div class="input-group mb-3">
                        <div class="input-group-append">
                          <span class="input-group-text" id="basic-addon2">Apellido</span>
                        </div>
                        <input type="text" class="form-control" name="" id="">
                      </div>

                      <div class="input-group mb-3">
                        <div class="input-group-append">
                          <span class="input-group-text" id="basic-addon2">Rut</span>
                        </div>
                        <input type="text" class="form-control" name="" id="">
                      </div>

                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1">@</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Correo electronico" name="" id="">
                      </div>
                    </div>
                    <div class="card-footer">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="" id="">
                        <label class="form-check-label" for="inlineRadio1">Acepto los terminos y condiciones de uso.</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        <br>
      </div>
      <input id="submit" class="btn btn-primary d-block mx-auto" name="submit" type="submit" value="Enviar">
    </form>

    <br>
  </section>
@endsection
