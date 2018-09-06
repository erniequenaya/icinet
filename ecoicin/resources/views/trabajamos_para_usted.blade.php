@extends('layout')

@include('include/header')

@section('main')
  <ol class="breadcrumb justify-content-left">
      <li class="breadcrumb-item">
          <a href="{{route('index')}}">Inicio</a>
      </li>
      <li class="breadcrumb-item active">'Trabajamos para usted'</li>
  </ol>
  <!-- banner-text -->
  <section class="banner-bottom-wthree">
      <div class="container">
          <div class="inner-sec-w3ls py-lg-5   py-md-3 py-3">
              <h3 class="tittle text-center mb-lg-5 mb-3">Ingresar solicitud</h3>

              <div class="mid-info mt-5">
                <h4 class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h4>

                <br>

                <button class="btn btn-primary btn-block" type="button" data-toggle="collapse" data-target="#ingresar_solicitud" aria-expanded="false" aria-controls="collapseExample">
                  <i class="fas fa-plus" aria-hidden></i> &nbsp; Ingresar solicitud
                </button>

                <br>

                <div class="collapse" id="ingresar_solicitud">
                  <div class="card card-body">
                    <form>
                      <fieldset class="form-group">
                        <label for="rut_empresa">Rut de la empresa</label>
                        <input type="text" class="form-control" id="rut_empresa" placeholder="Ejemplo: 123456789">
                      </fieldset>
                      <fieldset class="form-group">
                        <label for="nombre_empresa">Nombre de la empresa</label>
                        <input type="text" class="form-control" id="nombre_empresa" placeholder="Another input">
                      </fieldset>
                      <fieldset class="form-group">
                        <label for="telefono_empresa">Telefono</label>
                        <input type="tel" class="form-control" id="telefono_empresa" placeholder="Ejemplo: 12345678">
                      </fieldset>
                      <fieldset class="form-group">
                        <label for="correo_empresa">Correo electronico</label>
                        <input type="text" class="form-control" id="correo_empresa" placeholder="ejemplo@ejemplo.com">
                      </fieldset>
                      <fieldset class="form-group">
                        <label for="rubro_empresa">Rubro de la empresa</label>
                          <select class="form-control" id="rubro_empresa">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                      </fieldset>
                      <button type="submit" class="btn btn-primary mx-auto d-block">Enviar solicitud</button>
                    </form>
                  </div>
                </div>
                <br>
              </div>

              <h3 class="tittle text-center mb-lg-5 mb-3">Consultar solicitud</h3>

              <div class="mid-info mt-5">
                <h4 class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h4>

                <br>

                <button class="btn btn-primary btn-block" type="button" data-toggle="collapse" data-target="#consultar_solicitud" aria-expanded="false" aria-controls="collapseExample">
                  <i class="fas fa-plus" aria-hidden></i> &nbsp; Consultar solicitud
                </button>

                <br>

                <div class="collapse" id="consultar_solicitud">
                  <div class="card card-body">
                    <form>
                      <fieldset class="form-group">
                        <label for="codigo_empresa">Codigo de seguimiento</label>
                        <input type="text" class="form-control" id="codigo_empresa" placeholder="Ejemplo: 123asd456zxc">
                      </fieldset>
                      <button type="submit" class="btn btn-primary mx-auto d-block">Consultar solicitud</button>
                    </form>

                    <fieldset class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroupPrepend2">Estado</span>
                        </div>
                        <input type="text" class="form-control" id="validationDefaultUsername" placeholder="" aria-describedby="inputGroupPrepend2" disabled>
                      </div>
                    </fieldset>
                    <fieldset class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroupPrepend2">Razón</span>
                        </div>
                        <input type="text" class="form-control" id="validationDefaultUsername" placeholder="" aria-describedby="inputGroupPrepend2" disabled>
                      </div>
                    </fieldset>
                  </div>
                </div>
                <br>
              </div>

          </div>
      </div>
  </section>
@endsection
