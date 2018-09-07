@extends('layout')

@include('include/header')

@section('main')
  <ol class="breadcrumb justify-content-left">
      <li class="breadcrumb-item">
          <a href="{{route('index')}}">Inicio</a>
      </li>
      <li class="breadcrumb-item active">'Administracion'</li>
  </ol>

  <section class="banner-bottom-wthree">
      <div class="container">
          <div class="inner-sec-w3ls py-lg-5   py-md-3 py-3">
              <h3 class="tittle text-center mb-lg-5 mb-3">Area Informatica <button type="button"  data-toggle="collapse" data-target="#area_informatica" aria-expanded="false" aria-controls="collapseExample" class="btn btn-primary"><i class="fas fa-chevron-down"></i></button></h3>

              <div class="mid-info mt-5">
                <div class="collapse" id="area_informatica">
                  <button type="button"  data-toggle="collapse" data-target="#ingresar_area_informatica" aria-expanded="false" aria-controls="collapseExample" class="btn btn-primary btn-block">Añadir area informatica</button>

                  <div class="collapse" id="ingresar_area_informatica">
                    <div class="card card-body">
                      <form>
                        <fieldset class="form-group">
                          <label for="rut_empresa">Nombre Area Informatica</label>
                          <input name="nombre_area" type="text" class="form-control" id="nombre_area" placeholder="">
                        </fieldset>
                        <button type="submit" class="btn btn-primary mx-auto d-block">Añadir</button>
                      </form>
                    </div>
                  </div>

                  <br>

                  @include('tablas/tabla_area_informatica')
                </div>

                <h3 class="tittle text-center mb-lg-5 mb-3">Tipo solicitud <button type="button"  data-toggle="collapse" data-target="#tipo_solicitud" aria-expanded="false" aria-controls="collapseExample" class="btn btn-primary"><i class="fas fa-chevron-down"></i></button></h3>

                <div class="mid-info mt-5">
                  <div class="collapse" id="tipo_solicitud">
                    <button type="button"  data-toggle="collapse" data-target="#ingresar_tipo_solicitud" aria-expanded="false" aria-controls="collapseExample" class="btn btn-primary btn-block">Añadir tipo solicitud</button>

                    <div class="collapse" id="ingresar_tipo_solicitud">
                      <div class="card card-body">
                        <form>
                          <fieldset class="form-group">
                            <label for="rut_empresa">Nombre Tipo Soliciutud</label>
                            <input name="nombre_tipo_solicitud" type="text" class="form-control" id="nombre_tipo_solicitud" placeholder="">
                          </fieldset>
                          <button type="submit" class="btn btn-primary mx-auto d-block">Añadir</button>
                        </form>
                      </div>
                    </div>

                    <br>

                    @include('tablas/tabla_tipo_solicitud')
                  </div>

              </div>

              <h3 class="tittle text-center mb-lg-5 mb-3">Usuarios <button type="button"  data-toggle="collapse" data-target="#usuarios" aria-expanded="false" aria-controls="collapseExample" class="btn btn-primary"><i class="fas fa-chevron-down"></i></button></h3>

              <div class="mid-info mt-5">
                <div class="collapse" id="usuarios">
                  <button type="button"  data-toggle="collapse" data-target="#ingresar_usuario" aria-expanded="false" aria-controls="collapseExample" class="btn btn-primary btn-block">Añadir usuario</button>

                  <div class="collapse" id="ingresar_usuario">
                    <div class="card card-body">
                      <form>
                        <fieldset class="form-group">
                          <label for="rut_empresa">Nombre de usuario</label>
                          <input name="nombre_usuario" type="text" class="form-control" id="nombre_usuario" placeholder="">
                        </fieldset>
                        <fieldset class="form-group">
                          <label for="rut_empresa">Contraseña</label>
                          <input name="password" type="text" class="form-control" id="password" placeholder="">
                        </fieldset>
                        <fieldset class="form-group">
                          <label for="rubro_empresa">Tipo usuario</label>
                            <select class="form-control" id="rubro_empresa">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                            </select>
                        </fieldset>
                        <button type="submit" class="btn btn-primary mx-auto d-block">Añadir</button>
                      </form>
                    </div>
                  </div>

                  <br>

                  @include('tablas/tabla_usuarios')
                </div>

            </div>
          </div>
      </div>
  </section>

@endsection
