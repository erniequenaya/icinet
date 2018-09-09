@extends('layout')

@include('include/header')

@section('main')
  <ol class="breadcrumb justify-content-left">
      <li class="breadcrumb-item">
          <a href="{{route('index')}}">Inicio</a>
      </li>
      <li class="breadcrumb-item">
          <a href="{{route('empresas')}}">Empresas</a>
      </li>
      <li class="breadcrumb-item active">'Graficos de las solicitudes'</li>
  </ol>

  <section class="banner-bottom-wthree">
      <div class="container">
          <div class="inner-sec-w3ls py-lg-5 py-md-3 py-3">

            <div class="text-center">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions"  value="option1">
                <label class="form-check-label" for="inlineRadio1">Rubros de empresas</label>
              </div>

              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" value="option1">
                <label class="form-check-label" for="inlineRadio1">Areas Informaticas</label>
              </div>

              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" value="option1">
                <label class="form-check-label" for="inlineRadio1">Tipos de solicitudes</label>
              </div>
            </div>

            <canvas id="myChart" width="3" width="3"></canvas>


          </div>
      </div>
  </section>
@endsection

@section('script')
  <script type="text/javascript" src="{{asset('js/Chart/dist/Chart.bundle.min.js')}}"></script>

  <script>
  var ctx = $('#myChart');
  var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
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
  </script>
@endsection
