@extends('layout')

@include('include/header')

@section('main')
  <ol class="breadcrumb justify-content-left">
      <li class="breadcrumb-item">
          <a href="{{route('index')}}">Inicio</a>
      </li>
      <li class="breadcrumb-item active">'Administracion'</li>
  </ol>

  @if (!empty($mensaje))
    {{$mensaje}}
  @endif

  <section class="banner-bottom-wthree">
      <div class="container">

          <div class="inner-sec-w3ls py-lg-5   py-md-3 py-3">
            <h3 class="tittle text-center mb-lg-5 mb-3">Usuarios <button type="button"  data-toggle="collapse" data-target="#usuarios" aria-expanded="false" aria-controls="collapseExample" class="btn btn-primary"><i class="fas fa-chevron-down"></i></button></h3>

            <div class="mid-info mt-5">
              <div class="collapse" id="usuarios">
                <button type="button"  data-toggle="collapse" data-target="#ingresar_usuario" aria-expanded="false" aria-controls="collapseExample" class="btn btn-primary btn-block">Añadir usuario</button>

                <div class="collapse" id="ingresar_usuario">
                  <div class="card card-body">
                    <form action='{{route('ingresar_usuario')}}' method="post">
                      {{ csrf_field() }}
                      <fieldset class="form-group">
                        <label>RUT</label>
                        <input type="text" class="form-control" name="rut_usuario" placeholder="" required>
                      </fieldset>

                      <fieldset class="form-group">
                        <label>Contraseña</label>
                        <input type="password" class="form-control" name="password" placeholder="" required>
                      </fieldset>

                      <fieldset class="form-group">
                        <label>Nombre</label>
                        <input type="text" class="form-control" name="nombre_usuario" placeholder="" required>
                      </fieldset>
                      <fieldset class="form-group">
                        <label >Apellido</label>
                        <input type="text" class="form-control" name="apellido_usuario" placeholder="" required>
                      </fieldset>
                      <fieldset class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email_usuario" placeholder="" required>
                      </fieldset>

                      <fieldset class="form-group">
                        <label>Tipo usuario</label>
                          <select class="form-control" name="tipo_usuario" required>
                            @foreach ($tipo_usuario as $tipo)
                              <option value="{{$tipo->id_tipo_usuario}}">{{$tipo->nombre_tipo_usuario}}</option>
                            @endforeach
                          </select>
                      </fieldset>
                      <button type="submit" class="btn btn-primary mx-auto d-block">Añadir</button>
                    </form>
                  </div>
                </div>

                <br>
                <div id="vista_tabla_usuarios">
                  @include('tablas/tabla_usuarios')
                </div>
              </div>

          </div>


              <h3 class="tittle text-center mb-lg-5 mb-3">Area Informatica <button type="button"  data-toggle="collapse" data-target="#area_informatica" aria-expanded="false" aria-controls="collapseExample" class="btn btn-primary"><i class="fas fa-chevron-down"></i></button></h3>

              <div class="mid-info mt-5">
                <div class="collapse" id="area_informatica">
                  <button type="button"  data-toggle="collapse" data-target="#ingresar_area_informatica" aria-expanded="false" aria-controls="collapseExample" class="btn btn-primary btn-block">Añadir area informatica</button>

                  <div class="collapse" id="ingresar_area_informatica">
                    <div class="card card-body">
                      <form action="{{route('ingresar_tipo_area')}}" method="post">
                        {{ csrf_field() }}
                        <fieldset class="form-group">
                          <label>Nombre Area Informatica</label>
                          <input name="nombre_area" type="text" class="form-control" id="nombre_area" placeholder="" required>
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
                        <form action="{{route('ingresar_tipo_proyecto')}}" method="post">
                          {{ csrf_field() }}
                          <fieldset class="form-group">
                            <label for="rut_empresa">Nombre Tipo Soliciutud</label>
                            <input name="nombre_tipo_proyecto" type="text" class="form-control" placeholder="" required>
                          </fieldset>
                          <button type="submit" class="btn btn-primary mx-auto d-block">Añadir</button>
                        </form>
                      </div>
                    </div>

                    <br>

                    @include('tablas/tabla_tipo_solicitud')
                  </div>

              </div>

          </div>
      </div>
  </section>

  @include('modals/modificar_area_informatica')

  @include('modals/modificar_tipo_solicitud')

  @include('modals/modificar_usuario')
@endsection

@section('script')

  <script type="text/javascript">
  $(document).on('click', '.modificar_usuario', function(){
    var usuario = $(this).parents('td').attr('id');

    $.get('/usuario/'+usuario, function(resp){
      console.log(resp);
      $("#modificar_usuario input[name='id_usuario']").val(resp.id);
      $("#modificar_usuario input[name='rut_usuario']").val(resp.rut_usuario);
      $("#modificar_usuario input[name='password']").val(resp.password);
      $("#modificar_usuario input[name='nombre_usuario']").val(resp.nombre_usuario);
      $("#modificar_usuario input[name='apellido_usuario']").val(resp.apellido_usuario);
      $("#modificar_usuario input[name='email_usuario']").val(resp.email_usuario);
      $("#modificar_usuario input[name='tipo_usuario']").val(resp.tipo_usuario_id);
      $('#modificar_usuario').modal('toggle');
    }).fail(function(resp){
      console.log(resp.responseText);
    });
  });

  $(document).on('click', '.eliminar_usuario', function(){
    var usuario = $(this).parents('td').attr('id');
    var token = $('input[name=_token]').val();

    $.get('/usuario/'+usuario, function(resp){
      console.log(resp);
      var respuesta = confirm('¿Esta seguro que desea eliminar al usuario: '+resp.nombre_usuario+'?');
      if (respuesta == true) {
        $.ajax({
          url: '/eliminar/usuario',
          headers: {'X-CSRF-TOKEN' : token},
          type: 'post',
          data: {id_usuario: resp.id}
        })
        .done(function() {
          cargar_usuarios();

          console.log("success");
        })
        .fail(function() {
          console.log("error");
        })
        .always(function() {
          console.log("complete");
        });

      }
    }).fail(function(resp){
      console.log(resp.responseText);
    });
  });


  function cargar_usuarios(){
    var ruta = '/cargar/usuarios';
    $.get(ruta, function(resp){
      $('#vista_tabla_usuarios').html(resp);
      $('#tabla_usuarios').DataTable();
    });
  }
</script>
@endsection
