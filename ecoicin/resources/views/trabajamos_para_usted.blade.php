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
                    <form id="form_ingresar_solicitud" action="{{route('ingresar_solicitud')}}" method="post">
                      {{ csrf_field() }}
                      <fieldset class="form-group">
                        <label for="rut_empresa">Rut de la empresa</label>
                        <input type="text" class="form-control" id="rut_empresa" name="rut_empresa" placeholder="Ejemplo: 12345678-9" required>
                      </fieldset>
                      <fieldset class="form-group">
                        <label for="nombre_empresa">Nombre de la empresa</label>
                        <input type="text" class="form-control empresa" id="nombre_empresa" name="nombre_empresa" placeholder="Another input" required>
                      </fieldset>
                      <fieldset class="form-group">
                        <label for="telefono_empresa">Telefono</label>
                        <input type="tel" class="form-control empresa" id="telefono_empresa" name="telefono_empresa" placeholder="Ejemplo: 912345678" required>
                      </fieldset>
                      <fieldset class="form-group">
                        <label for="email_empresa">Correo electronico</label>
                        <input type="email" class="form-control empresa" id="email_empresa" name="email_empresa" placeholder="ejemplo@ejemplo.com" required>
                      </fieldset>
                      <fieldset class="form-group">
                        <label for="rubro_empresa">Rubro de la empresa</label>
                          <select class="form-control empresa" id="rubro_empresa" name="rubro_empresa" required>
                            @foreach ($rubros as $rubro)
                              <option value="{{$rubro->id_rubro}}">{{$rubro->nombre_rubro}}</option>
                            @endforeach
                          </select>
                      </fieldset>
                      <fieldset class="form-group">
                        <label for="descripcion_solicitud">Descripcion</label>
                        <textarea class="form-control" id="descripcion_solicitud" name="descripcion_solicitud" rows="3" required></textarea>
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
                        <input type="text" class="form-control" id="codigo_seguimiento" placeholder="Ejemplo: 123asd456zxc" required>
                      </fieldset>
                      <button type="button" id="btn_consultar_solicitud" class="btn btn-primary mx-auto d-block">Consultar solicitud</button>
                    </form>

                    <fieldset class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">Estado</span>
                        </div>
                        <input type="text" class="form-control" placeholder="" id="estado_solicitud" disabled>
                      </div>
                    </fieldset>
                    <fieldset class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">Razón</span>
                        </div>
                        <input type="text" class="form-control" placeholder="" id="razon_solicitud" disabled>
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

@section('script')
  <script type="text/javascript">

  $(document).on('blur', '#rut_empresa', function(){
    var rut_empresa = $(this).val();

    $.get('/empresa/'+rut_empresa, function(resp){
      console.log(resp);
      if(resp != 0){
        $('#nombre_empresa').val(resp.nombre_empresa);
        $('#telefono_empresa').val(resp.telefono_empresa);
        $('#email_empresa').val(resp.email_empresa);
        $('#rubro_empresa').val(resp.rubro_id);

        $('.empresa').prop('disabled', true);
      } else {
        $('#nombre_empresa').val('');
        $('#telefono_empresa').val('');
        $('#email_empresa').val('');
        $('#rubro_empresa').val(1);

        $('.empresa').prop('disabled', false);
      }

    });
  });

  $(document).on('click', '#btn_consultar_solicitud', function(){
    var codigo_seguimiento = $('#codigo_seguimiento').val();

    $.get('/consultar_solicitud/'+codigo_seguimiento, function(resp){
      console.log(resp);
      if(resp != 0){
        $('#estado_solicitud').val(resp.estado);
        $('#razon_solicitud').val(resp.razon);
      } else {
        $('#estado_solicitud').val('');
        $('#razon_solicitud').val('');
      }

    });
  });

  $(document).on('submit', '#form_ingresar_solicitud', function(event){
    event.preventDefault();

    var url = $(this).attr('action');
    var token = $('input[name=_token]').val();
    var datos = $(this).serialize();

    ajax(url,token,datos);
  });

  function ajax(url, token, datos){
    $.ajax({
      url: url,
      headers: {'X-CSRF-TOKEN' : token},
      type: 'POST',
      data: datos
    })
    .done(function(resp) {
      console.log("success");
      alert(resp);
    })
    .fail(function(resp) {
      alert(resp);
      console.log("error");
      console.log(resp.responseText);
    })
    .always(function() {
      console.log("complete");
    });
  }

  </script>
@endsection
