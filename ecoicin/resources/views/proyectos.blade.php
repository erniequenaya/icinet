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
      $("#modificar_proyecto h5[name='nombre_proyecto'").text(resp.nombre_proyecto);
      $("#modificar_proyecto input[name='id_proyecto']").val(resp.id_proyecto);
      $("#modificar_proyecto input[name='nombre_proyecto']").val(resp.nombre_proyecto);
      $("#modificar_proyecto input[name='autores_proyecto']").val(resp.autores_proyecto);
      $("#modificar_proyecto input[name='tipo_proyecto']").val(resp.tipo_proyecto_id);
      $("#modificar_proyecto input[name='fecha_proyecto']").val(resp.fecha_proyecto);
      $('#modificar_proyecto').modal('toggle');

    }).fail(function(resp){
      console.log(resp.responseText);
    });
  });

  $(document).on('click', '.modificar_documento', function(){
    
  });
</script>
@endsection
