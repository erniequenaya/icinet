@extends('layout')

@include('include/header')

@section('main')
  <ol class="breadcrumb justify-content-left">
      <li class="breadcrumb-item">
          <a href="{{route('index')}}">Inicio</a>
      </li>
      <li class="breadcrumb-item active">'Proyectos'</li>
  </ol>

  <section class="banner-bottom-wthree">
      <div class="container">
          <div class="inner-sec-w3ls py-lg-5   py-md-3 py-3">
              <h3 class="tittle text-center mb-lg-5 mb-3">Proyectos</h3>

              <div class="mid-info mt-5">
                <br>
                <button class="btn btn-primary btn-block" type="button" data-toggle="modal" data-target="#añadir_proyecto">
                  <i class="fas fa-plus" aria-hidden></i> &nbsp; Añadir proyecto
                </button><br>
                @include('tablas/tabla_proyectos')
                {{ csrf_field() }}
              </div>

              <br>
          </div>
      </div>
  </section>

  @include('modals/añadir_proyecto')

  @include('modals/modificar_proyecto')

@endsection

@section('script')

  <script type="text/javascript">
  $(document).on('click', '.modificar', function(){
    var proyecto = $(this).parents('td').attr('id');
    $.get('/repositorio/'+proyecto, function(resp){
      $("#modificar_proyecto h5[name='nombre_proyecto'").text(resp.proyecto.nombre_proyecto);
      $("#modificar_proyecto input[name='id_proyecto']").val(resp.proyecto.id_proyecto);
      $("#modificar_proyecto input[name='nombre_proyecto']").val(resp.proyecto.nombre_proyecto);
      $("#modificar_proyecto input[name='autores_proyecto']").val(resp.proyecto.autores_proyecto);
      $("#modificar_proyecto input[name='tipo_proyecto']").val(resp.proyecto.tipo_proyecto_id);
      $("#modificar_proyecto input[name='fecha_proyecto']").val(resp.proyecto.fecha_proyecto);
      $("#modificar_proyecto input[name='url_proyecto']").val(resp.proyecto.url_proyecto);
      $('#modificar_proyecto').modal('toggle');
      console.log(resp);
    }).fail(function(resp){
      console.log(resp.responseText);
    });
  });

  $(document).on('click', '.eliminar', function(){
    var token = $('input[name=_token]').val();
    var proyecto = $(this).parents('td').attr('id');

    var resp = confirm("Esta seguro que desea eliminar este proyecto?");

    if(resp == true){
      $.ajax({
        url: '/repositorio/eliminar_proyecto',
        headers: {'X-CSRF-TOKEN' : token},
        type: 'post',
        data: {id_proyecto: proyecto}
      })
      .done(function(resp) {
        if (resp == true) {
          location.reload(true);
        }
        console.log("success");
      })
      .fail(function() {
        console.log("error");
      })
      .always(function() {
        console.log("complete");
      });
    }
  });
</script>
@endsection
