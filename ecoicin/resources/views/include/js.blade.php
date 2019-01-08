<!-- js -->
<!--/slider-->
<script src="{{asset('js/jquery-2.2.3.min.js')}}"></script>
<script src="{{asset('js/modernizr-2.6.2.min.js')}}"></script>
<script src="{{asset('js/jquery.zoomslider.min.js')}}"></script>

<!--//slider-->
<!--search jQuery-
<script src="{{asset('js/classie-search.js')}}"></script>
<script src="{{asset('js/demo1-search.js')}}"></script>
//search jQuery-->

<script src="{{asset('js/jquery.datables.min.js')}}" charset="utf-8"></script>
<script src="{{asset('js/datatables.bootstrap.min.js')}}" charset="utf-8"></script>

<script>
    $(document).ready(function() {

        $(".dropdown").hover(
            function() {
                $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                $(this).toggleClass('open');
            },
            function() {
                $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                $(this).toggleClass('open');
            }
        );

        $('#ingles').hide();
  });

    $(document).on('change', '#idioma', function(event){
      event.preventDefault();

      var idioma = $(this).val();

      if(idioma == 'espanol'){
        $('#ingles').hide();
        $('#espanol').show();
      }
      else if (idioma == 'ingles') {
        $('#espanol').hide();
        $('#ingles').show();
      }
    })
</script>
<!-- //dropdown nav -->
<!-- password-script -->
<script>
    window.onload = function() {
        document.getElementById("password1").onchange = validatePassword;
        document.getElementById("password2").onchange = validatePassword;
    }

    function validatePassword() {
        var pass2 = document.getElementById("password2").value;
        var pass1 = document.getElementById("password1").value;
        if (pass1 != pass2)
            document.getElementById("password2").setCustomValidity("Passwords Don't Match");
        else
            document.getElementById("password2").setCustomValidity('');
        //empty string means no validation error
    }
</script>
<!-- //password-script -->

<!-- stats -->
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.countup.js"></script>
<script>
    $('.counter').countUp();
</script>
<!-- //stats -->

<!-- //js -->
<script src="js/bootstrap.js"></script>
<!--/ start-smoth-scrolling -->
<script src="js/move-top.js"></script>
<script src="js/easing.js"></script>
<script>
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 900);
        });
    });
</script>
<script>
    $(document).ready(function() {
        /*
                    var defaults = {
                        containerID: 'toTop', // fading element id
                      containerHoverID: 'toTopHover', // fading element hover id
                      scrollSpeed: 1200,
                      easingType: 'linear'
                     };
                    */

        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });

    $(document).ready(function() {
      $('#error-rut').hide();
      $('#password_group').hide();
    });

    $(document).on('click', '#cerrar-error', function(){
      $('#error-rut').hide(500);
    });

    $(document).on('submit', '#form_login', function(event){
      event.preventDefault();

      var ruta = $(this).attr('action');
      var datos = $(this).serialize();
      var token = $('input[name=_token]').val();

      $.ajax({
        url: ruta,
        headers: {'X-CSRF-TOKEN' : token},
        type: 'post',
        dataType: 'json',
        data: datos
      })
      .done(function(resp) {
        console.log(resp);
        console.log('exito');
        location.reload(true);

      })
      .fail(function(resp) {
        //$('#error-rut').html("<div class='alert alert-danger'><span>No coincide con los registros.</span><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>");
        $('#error-rut').show(500);
        console.log(resp.responseText);
      })
      .always(function() {
        console.log("complete");
      });

    });

    $(document).ready(function() {
      $('.data_table').DataTable({
        "language": {
          "url": "{{asset('js/datatables_esp.json')}}"
        },
        "lengthChange": false,
        "pageLength": 5

      });
    });
</script>
<!--// end-smoth-scrolling -->
