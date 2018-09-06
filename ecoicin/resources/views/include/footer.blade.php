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
                        <a href="http://www.uta.cl/">Universidad de Tarapaca</a>
                    </li>
                    <li>
                        <a href="https://web.facebook.com/ICINiqq/?fb_dtsg_ag=Ady-BcrhmdIt2UEr-RrZ77kR3BCkE4n8orBVf-rQefAr1w%3AAdy8iZgsgtPPO2NZQlCU_VPpIfAHaMYb3rJv7Rpc0cf5zQ">Facebook ICIN</a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>

            <div class="col footer-grid-wthree-w3ls">
              <iframe alt="Ubicación de la universidad" class="mx-auto d-block" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3743.6125652311152!2d-70.14336828569223!3d-20.23341458643461!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9152140bbd111c49%3A0x274752c1063473c4!2sUniversidad+de+Tarapac%C3%A1+Sede+Esmeralda!5e0!3m2!1ses-419!2scl!4v1536207178551" width="300" height="225" frameborder="0" style="border:0"></iframe>
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

@include('include/login')

@include('include/register')
