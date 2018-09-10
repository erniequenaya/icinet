@extends('layout')

@include('include/header')

@section('main')
  <ol class="breadcrumb justify-content-left">
      <li class="breadcrumb-item">
          <a href="{{route('index')}}">Inicio</a>
      </li>
      <li class="breadcrumb-item active">'Empresas'</li>
  </ol>

  <section class="banner-bottom-wthree">
      <div class="container">
          <div class="inner-sec-w3ls py-lg-5   py-md-3 py-3">
              <h3 class="tittle text-center mb-lg-5 mb-3">Empresas</h3>

              <div class="mid-info mt-5">
                <button type="button" id="btn_grafico" class="btn btn-primary btn-block" data-toggle="collapse" data-target="#graficos_solicitudes" aria-expanded="false" aria-controls="graficos_solicitudes">Ver graficos</button>

                <div class="collapse" id="graficos_solicitudes">
                  <div class="inner-sec-w3ls py-lg-5 py-md-3 py-3">

                    <div class="text-center">
                      <form class="form-inline mx-auto d-block">
                        <div class="form-group">
                          <label>Filtrar por &nbsp;</label>
                          <select class="form-control col" id="item_grafico">
                            <option value="1">Rubro de empresas</option>
                            <option value="2">Areas informaticas</option>
                            <option value="3">Tipos de solicitudes</option>
                          </select>
                        </div>
                      </form>
                    </div>

                    <canvas id="myChart" width="3" width="3"></canvas>


                  </div>
                </div>

                <br>

                @include('tablas/tabla_empresas')

              </div>

              <br>
          </div>
      </div>
  </section>

  @include('modals/completar_solicitud')

  @include('modals/responder_solicitud')

@endsection

@section('script')
  <script type="text/javascript" src="{{asset('js/Chart/dist/Chart.bundle.min.js')}}"></script>



  <script>

  $(document).on('click', '.completar', function(){
    var solicitud = $(this).parents('td').attr('id');

    $.get('/solicitud/'+solicitud, function(resp){
      $("#completar_solicitud h5[name='nombre_empresa'").text(resp.nombre_empresa);
      $("#completar_solicitud input[name='id_solicitud']").val(resp.solicitud);
      $('#completar_solicitud').modal('toggle')
    });
  });

  $(document).on('click', '.responder', function(){
    var solicitud = $(this).parents('td').attr('id');

    $.get('/solicitud/'+solicitud, function(resp){
      $("#responder_solicitud h5[name='nombre_empresa'").text(resp.nombre_empresa);
      $("#responder_solicitud input[name='id_solicitud']").val(resp.solicitud);
      $('#responder_solicitud').modal('toggle')
    });
  });

  var ctx = $('#myChart');
  var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: [],
        datasets: [{
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
  });

  $(document).on('change', '#item_grafico', function(event){
    event.preventDefault();
    var item = $(this).val();
    alert(item);

    cargar_cantidad(item);
  })

  $(document).ready(function() {
    cargar_cantidad(3);
  });


  function cargar_cantidad(item){
    $.get('/empresas/grafico/'+item, function(resp){
      ctx.show(500);
      console.log(resp);

      myChart.data.labels = resp.nombres;
      myChart.data.datasets[0].label = 'Cantidad';
      myChart.data.datasets[0].data = resp.cantidades;
      myChart.data.datasets[0].backgroundColor = resp.backgrounds;
      myChart.data.datasets[0].borderColor = resp.borders;
      myChart.options.title.text = resp.item;

      myChart.update();
      console.log(myChart.data.datasets[0]);
    }).fail(function(resp){
      console.log(resp.responseText);
      $('#myChart').hide();
    });
  }

  </script>
@endsection
