@extends('layout')

@include('include/header')

@section('main')
  <ol class="breadcrumb justify-content-left">
      <li class="breadcrumb-item">
          <a href="{{route('index')}}">Inicio</a>
      </li>
      <li class="breadcrumb-item active">'Repositorio'</li>
  </ol>

  <section class="banner-bottom-wthree">
      <div class="container">
          <div class="inner-sec-w3ls py-lg-5   py-md-3 py-3">

            @if (isset($mensaje))
              {{$mensaje}}
            @endif
              <h3 class="tittle text-center mb-lg-5 mb-3">Repositorio</h3>

              <div class="mid-info mt-5">
                <h4 class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h4>
              </div>
              <div class="mid-info mt-5">

                <div class="container">
                @empty ($proyectos)
                  <fieldset class="form-group">
                    <label for="tipo_proyecto"><b>Filtrar por</b></label>
                    <select class="form-control" id="tipo_proyecto">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  </fieldset>
                  @endempty
                  @forelse ($proyectos as $proyecto)
                    @if ($cont % 2 == 0)
                      <div class="row populor_category_grids mt-5">
                    @endif
                          <div class="col-md-6 category_grid">
                              <div class="view view3 view-tenth">
                                  <div class="category_text_box">
                                      <i class="fas fa-users"></i>
                                      <h3>{{$proyecto->nombre_proyecto}}</h3>
                                      <p>{{$proyecto->autores_proyecto}}</p>
                                  </div>
                                  <div class="mask">
                                      <a href="#">
                                          <img src="images/1.jpg" class="img-fluid" alt="">
                                      </a>
                                  </div>
                              </div>
                              <br>
                              <div class="row container mx-auto d-block"><a target='_blank' href="/ver_documento/{{$proyecto->informe()}}"><button class="col-5 btn btn-primary" type="button" name="button">Ver Informe</button></a><a href="/descargar_documento/{{$proyecto->informe()}}"><button class="col-5 offset-2 btn btn-primary" type="button" name="button">Descargar Informe</button></a></div>
                              &nbsp;<div class="row container mx-auto d-block"><a target='_blank' href="/ver_documento/{{$proyecto->presentacion()}}"><button class="col-5 btn btn-primary" type="button" name="button">Ver Presentacion</button></a><a href="/descargar_documento/{{$proyecto->presentacion()}}"><button class="col-5 offset-2 btn btn-primary" type="button" name="button">Descargar Presentacion</button></a></div>
                          </div>
                      @if ($cont % 2 != 0)
                      </div>
                      @endif
                      @php
                        $cont++;
                      @endphp
                    @empty
                      <h3 class="tittle text-center mb-lg-5 mb-3">No se han encontrado proyectos aun.</h3>
                    @endforelse
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

@section('script')
  <script type="text/javascript">
    /*$(document).on('click', '.ver', function(){
      var documento = $(this).attr('id');


    });*/

  </script>
@endsection
