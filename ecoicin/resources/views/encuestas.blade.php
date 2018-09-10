@extends('layout')

@include('include/header')

@section('main')
  <ol class="breadcrumb justify-content-left">
      <li class="breadcrumb-item">
          <a href="{{route('index')}}">Inicio</a>
      </li>
      <li class="breadcrumb-item active">'Encuestas'</li>
  </ol>

  <section class="banner-bottom-wthree">
      <div class="container">
          <div class="inner-sec-w3ls py-lg-5   py-md-3 py-3">
              <h3 class="tittle text-center mb-lg-5 mb-3">Encuestas</h3>

              <div class="mid-info mt-5">
                  <button type="button"  data-toggle="collapse" data-target="#ingresar_encuesta" aria-expanded="false" aria-controls="collapseExample" class="btn btn-primary btn-block">Añadir encuesta</button>

                  <div class="collapse" id="ingresar_encuesta">
                    <div class="card card-body">
                      <form action="{{route('encuestas.crear')}}" method="post">
                        {{ csrf_field() }}
                        <fieldset class="form-group">
                          <label for="nombre_encuesta">Nombre</label>
                          <input name="nombre_encuesta" type="text" class="form-control" placeholder="">
                        </fieldset>
                        <fieldset class="form-group">
                          <label for="url_encuesta">URL</label>
                          <input name="url_encuesta" type="text" class="form-control" placeholder="">
                        </fieldset>
                        <fieldset class="form-group">
                          <label for="fecha_inicio_encuesta">Fecha de inicio</label>
                          <input name="fecha_inicio_encuesta" type="date" class="form-control" placeholder="">
                        </fieldset>
                        <fieldset class="form-group">
                          <label for="fecha_termino_encuesta">Fecha de termino</label>
                          <input name="fecha_termino_encuesta" type="date" class="form-control" placeholder="">
                        </fieldset>
                        <fieldset class="form-check">
                          <input name='solo_alumnos' class="form-check-input" type="checkbox" value="1">
                          <label class="form-check-label" for="defaultCheck1">Solo para alumnos</label>
                        </fieldset>
                        <fieldset class="form-check">
                          <input name='visible' class="form-check-input" type="checkbox" value="1">
                          <label class="form-check-label" for="defaultCheck1">Visible</label>
                        </fieldset>

                        <button type="submit" class="btn btn-primary mx-auto d-block">Añadir</button>
                      </form>
                    </div>
                  </div>
                  <br>

                  @include('tablas.tabla_encuestas')
          </div>
      </div>
  </section>

  @include('modals.modificar_encuestas')

@endsection

@section('script')
  <script type="text/javascript">
  $(document).on('click', '.modificar', function(){
    var encuesta = $(this).parents('td').attr('id');
    $.get('/encuesta/'+encuesta, function(resp){
      $("#modificar_encuesta h5[name='nombre_encuesta'").text(resp.nombre_encuesta);
      $("#modificar_encuesta input[name='id_encuesta']").val(resp.id_encuesta);
      $("#modificar_encuesta input[name='nombre_encuesta']").val(resp.nombre_encuesta);
      $("#modificar_encuesta input[name='url_encuesta']").val(resp.link_encuesta);
      $("#modificar_encuesta input[name='fecha_inicio_encuesta']").val(resp.fecha_inicio_encuesta);
      $("#modificar_encuesta input[name='fecha_termino_encuesta']").val(resp.fecha_termino_encuesta);
      $("#modificar_encuesta input[name='solo_alumnos']").prop('checked', resp.solo_alumnos);
      $("#modificar_encuesta input[name='visible']").prop('checked', resp.visible);
      $('#modificar_encuesta').modal('toggle');

    }).fail(function(resp){
      console.log(resp.responseText);
    });
  });
  </script>
@endsection
