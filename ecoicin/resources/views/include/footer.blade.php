<!--footer -->
<footer class="footer-emp-w3layouts bg-dark dotts py-lg-5 py-3">
    <div class="container-fluid px-lg-5 px-3">
        <div class="row footer-top">
            <div class="col footer-grid-wthree-w3ls">
              @auth
                  @if (tipoUsuario() == 2)
                    <button class="btn celeste-uta text-light d-block mx-auto" type="button" name="button"><i class="fa fa-edit"></i></button>
                  @endif
              @endauth
              <br>
                <img src="{{asset('images/vertical_iquique.png')}}" style="width: 297px;, height: auto;" class="img-fluid mx-auto d-block" alt="Universidad de Tarapaca">
            </div>
            <div class="col footer-grid-wthree-w3ls text-center">
                <div class="footer-title">
                    <h3>Links relacionados
                      @auth
                          @if (tipoUsuario() == 2)
                            <button class="btn celeste-uta text-light" type="button" name="button"><i class="fa fa-edit"></i></button>
                          @endif
                      @endauth
                    </h3>
                </div>
                <ul class="links text-center">
                    <li>
                        <a href="{{route('index')}}">Inicio</a>
                    </li>
                    <li>
                        <a href="{{route('quienes_somos')}}">¿Quienes somos?</a>
                    </li>
                  <!-- SECCION EMPRESAS -->
                    <li>
                        <a href="{{route('contactanos')}}">Contactanos</a>
                    </li>
                    <li>
                        <a href="http://www.uta.cl/" target="_blank">Universidad de Tarapaca</a>
                    </li>
                    <li>
                        <a href="https://web.facebook.com/ICINiqq/?fb_dtsg_ag=Ady-BcrhmdIt2UEr-RrZ77kR3BCkE4n8orBVf-rQefAr1w%3AAdy8iZgsgtPPO2NZQlCU_VPpIfAHaMYb3rJv7Rpc0cf5zQ" target="_blank">Facebook ICIN</a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="copyright mt-4">
            <p class="copy-right text-center ">&copy; 2018 Replenish. All Rights Reserved | Design by
                <a href="http://w3layouts.com/"> W3layouts </a>

                @auth
                    @if (tipoUsuario() == 2)
                      <button class="btn celeste-uta text-light" type="button" name="button"><i class="fa fa-edit"></i></button>
                    @endif
                @endauth
            </p>
        </div>
    </div>
</footer>
<!-- //footer -->

<!--model-forms-->

@include('modals/login')

@include('modals/register')
