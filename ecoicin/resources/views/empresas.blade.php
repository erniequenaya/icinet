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
                <button type="button" class="btn btn-primary btn-block">Ver graficos</button>

                <br>

                <div class="table-responsive">
                  <table class="table table-striped text-center">
                    <thead class="bg-primary text-light">
                      <tr>
                        <th scope="col">Rut Empresa</th>
                        <th scope="col">Nombre Empresa</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Rubro</th>
                        <th scope="col">Area Informatica</th>
                        <th scope="col">Tipo Solicitud</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Acciones</th>
                      </tr>
                    </thead>
                    <tbody>
                      @for ($i=0; $i < 5; $i++)
                        <tr>
                          <th scope="row">{{$i}}</th>
                          @for ($j=0; $j < 8; $j++)
                            <td>Mark</td>
                          @endfor
                          <td><i class="fas fa-pencil-alt" data-toggle="modal" data-target="#completar_solicitud"></i> <i class="fas fa-check"></i></td>
                        </tr>
                      @endfor
                    </tbody>
                  </table>
                </div>

              </div>

              <br>

              <nav aria-label="Page navigation example">
                <ul class="pagination pagination-lg justify-content-center">
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item active"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </nav>

          </div>
      </div>
  </section>

@endsection
