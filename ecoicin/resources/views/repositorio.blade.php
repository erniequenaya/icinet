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
              <h3 class="tittle text-center mb-lg-5 mb-3">Repositorio</h3>

              <div class="mid-info mt-5">
                <h4 class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h4>
                <br>
              </div>

              <div class="mid-info mt-5">
                <div class="container">
                    @for ($i=0; $i < 3; $i++)
                      <div class="row populor_category_grids mt-5">
                          <div class="col-md-4 category_grid">
                              <div class="view view-tenth">
                                  <div class="category_text_box">
                                      <i class="fas fa-bullhorn"></i>
                                      <h3> Multimedia</h3>
                                      <p>(34 open flow-positions)</p>
                                  </div>
                                  <div class="mask">
                                      <a href="#">
                                          <img src="images/p1.jpg" class="img-fluid" alt="">
                                      </a>
                                  </div>
                              </div>
                              <br>
                              <h4 class="text-center">Esta es una pequeña explicacion del proyecto</h4>
                          </div>
                          <div class="col-md-4 category_grid">
                              <div class="view view1 view-tenth">
                                  <div class="category_text_box">
                                      <i class="fas fa-graduation-cap"></i>
                                      <h3>Education</h3>
                                      <p>(22 open flow-positions)</p>
                                  </div>
                                  <div class="mask">
                                      <a href="#">
                                          <img src="images/p2.jpg" class="img-fluid" alt="">
                                      </a>
                                  </div>
                              </div>
                              <br>
                              <h4 class="text-center">Esta es una pequeña explicacion del proyecto</h4>
                          </div>

                          <div class="col-md-4 category_grid">
                              <div class="view view3 view-tenth">
                                  <div class="category_text_box">
                                      <i class="fas fa-users"></i>
                                      <h3>Human Resource</h3>
                                      <p>(4 open flow-positions)</p>
                                  </div>
                                  <div class="mask">
                                      <a href="#">
                                          <img src="images/p4.jpg" class="img-fluid" alt="">
                                      </a>
                                  </div>
                              </div>
                              <br>
                              <h4 class="text-center">Esta es una pequeña explicacion del proyecto</h4>
                          </div>
                      </div>
                    @endfor
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
