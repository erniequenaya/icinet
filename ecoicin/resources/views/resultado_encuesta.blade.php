@extends('layout')

@include('include/header')

@section('main')
<script src="{{asset('js/Chart/dist/Chart.js')}}"></script>

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
            <h3 class="tittle text-center mb-lg-5 mb-3">Resultado encuesta
              @auth
                  @if (tipoUsuario() == 2)
                    <button class="btn celeste-uta text-light" type="button" name="button"><i class="fa fa-edit"></i></button>
                  @endif
              @endauth
            </h3>

        </div>

        <canvas id="myChart" height="50"></canvas>

        <br>

        <div class="container">
          <h4>Activo/Reflexivo: {{$cuestionario[0]['puntaje'].$cuestionario[0]['alt_mayor']}}</h4>
          <h4>Sensitivo/Intuitivo: {{$cuestionario[1]['puntaje'].$cuestionario[1]['alt_mayor']}}</h4>
          <h4>Visual/Verbal:{{$cuestionario[2]['puntaje'].$cuestionario[2]['alt_mayor']}}</h4>
          <h4>Secuencial/Global:{{$cuestionario[3]['puntaje'].$cuestionario[3]['alt_mayor']}}</h4>
        </div>

        <div class="text-justify">
          <p>
            De acuerdo con el modelo en el que se basa el ILS, hay cuatro dimensiones del estilo de aprendizaje, y cada dimensión tiene dos categorías opuestas (como activa y reflexiva). La puntuación informada para una dimensión indica su preferencia por una categoría u otra.
          </p>
          <br>
          <p>
            Si su puntaje para una dimensión es 1 o 3, está bastante bien equilibrado en las dos categorías de esa dimensión, con solo una leve preferencia por una u otra.
          </p>
          <br>
          <p>
            Si su puntaje para una dimensión es 5 o 7, tiene una preferencia moderada por una categoría de esa dimensión. Es posible que aprenda menos fácilmente en un entorno que no logra abordar esa preferencia al menos parte del tiempo que lo haría en un entorno más equilibrado.
          </p>
          <br>
          <p>
            Si su puntaje para una dimensión es 9 u 11, tiene una fuerte preferencia por una categoría de esa dimensión. Es posible que tenga dificultades para aprender en un entorno que no logra abordar esa preferencia al menos parte del tiempo.
          </p>

          <p>

          </p>

        </div>
    </div>

    <br>
  </section>
@endsection

@section('script')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>

  <script>
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'horizontalBar',
        data: {
            labels: ["Activo/Reflexivo", "Sensitivo/Auditivo", "Visual/Verbal", "Secuencial/Global"],
            datasets: [{
                label: '',
                data: [8, 3, 7, 1],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)'
                ],
                borderWidth: 1
            },
            {
                label: '',
                data: [-5, -2, -8, -10],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)'
                ],
                borderWidth: 1
            }
          ],
        },
        options: {
          legend: {
            display: false,
          },
          tooltips: {
       enabled: false
  },
            responsive: true,
            scales: {
                yAxes: [{
                    stacked: true,
                    ticks: {
                        beginAtZero:true
                    }
                }],
                xAxes: [{
                  stacked: true,
                  ticks: {
                    max: 11,
                    min: -11,
                  }
                }]
            }
        }
    });
    </script>
@endsection
