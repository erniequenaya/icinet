<!--footer -->
<footer class="footer-emp-w3layouts bg-dark dotts py-lg-5 py-3">
    <div class="container-fluid px-lg-5 px-3">
        <div class="row footer-top">
            <div class="col footer-grid-wthree-w3ls">
                <img src="{{asset('images/logo_uta.png')}}" class="img-fluid" alt="Universidad de Tarapaca">
            </div>
            <div class="col footer-grid-wthree-w3ls text-center">
                <div class="footer-title">
                    <h3>Links relacionados</h3>
                </div>
                <ul class="links text-center">
                    <li>
                        <a href="{{route('index')}}">Inicio</a>
                    </li>
                    <li>
                        <a href="{{route('quienes_somos')}}">¿Quienes somos?</a>
                    </li>
                    <li>
                        <a href="{{route('trabajamos_para_usted')}}">Trabajamos para usted</a>
                    </li>
                    <li>
                        <a href="{{route('repositorio')}}">Repositorio</a>
                    </li>
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

            <div class="col footer-grid-wthree-w3ls">
              <div class="">
                <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=2&amp;bgcolor=%23FFFFFF&amp;src=2icpl7rs955s8ebga4smimncro%40group.calendar.google.com&amp;color=%238C500B&amp;src=es.cl%23holiday%40group.v.calendar.google.com&amp;color=%23125A12&amp;ctz=America%2FSantiago" style="border-width:0" width="400" height="300" frameborder="0" scrolling="no"></iframe>
              </div>
            </div>
        </div>
        <div class="copyright mt-4">
            <p class="copy-right text-center ">&copy; 2018 Replenish. All Rights Reserved | Design by
                <a href="http://w3layouts.com/"> W3layouts </a>
            </p>
        </div>
    </div>
</footer>
<!-- //footer -->

<!--model-forms-->

@include('modals/login')

@include('modals/register')

@include('modals/completar_solicitud')

@include('modals/responder_solicitud')

@include('modals/añadir_proyecto')

@include('modals/modificar_area_informatica')

@include('modals/modificar_tipo_solicitud')

@include('modals/modificar_usuario')
