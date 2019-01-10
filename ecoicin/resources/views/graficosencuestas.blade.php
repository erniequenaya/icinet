@extends('layout')

@include('include/header')


@section('main')

<ol class="breadcrumb justify-content-left">
    <li class="breadcrumb-item">
        <a href="{{route('index')}}">Encuestas</a>
    </li>
    <li class="breadcrumb-item active">'Resultados'</li>
</ol>


<div class="container">

  <h3 class="tittle text-center mb-lg-5 mb-3">Graficos Encuestas</h3>



<canvas id="myChart" width="3" width="3"></canvas>

<canvas id="myChart2" width="3" width="3"></canvas>

<canvas id="myChart3" width="3" width="3"></canvas>

<canvas id="myChart4" width="3" width="3"></canvas>


</div>

@endsection


@section('script')


  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>

  <script>
  var datos = [3.0 , 44.6 , 25.7 , 21.8 , 4.0 , 1.0];
  var textos = ["9-11 A", "5-7 A", "1-3 A", "1-3 B", "5-7 B", "9-11 B"];
  var ctx = $('#myChart');
  var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: textos,
        datasets: [{
            label: 'Etiqueta',
            data: datos,
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



  <script>
  var datos = [40.0 , 44.6 , 25.7 , 21.8 , 4.0 , 1.0];
  var textos = ["9-11 A", "5-7 A", "1-3 A", "1-3 B", "5-7 B", "9-11 B"];
  var ctx = $('#myChart2');
  var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: textos,
        datasets: [{
            label: 'Etiqueta',
            data: datos,
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




  <script>
  var datos = [40.0 , 44.6 , 25.7 , 21.8 , 4.0 , 1.0];
  var textos = ["9-11 A", "5-7 A", "1-3 A", "1-3 B", "5-7 B", "9-11 B"];
  var ctx = $('#myChart3');
  var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: textos,
        datasets: [{
            label: 'Etiqueta',
            data: datos,
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





  <script>
  var datos = [40.0 , 44.6 , 25.7 , 21.8 , 4.0 , 1.0];
  var textos = ["9-11 A", "5-7 A", "1-3 A", "1-3 B", "5-7 B", "9-11 B"];
  var ctx = $('#myChart4');
  var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: textos,
        datasets: [{
            label: 'Etiqueta',
            data: datos,
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
