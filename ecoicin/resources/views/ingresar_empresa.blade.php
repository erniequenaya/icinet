<form id="form_ingresar" action="/ingresar" method="post">

  {{ csrf_field() }}
  <input type="text" name="rut_empresa" value="">
  <input type="text" name="nombre_empresa" value="">
  <input type="tel" name="telefono_empresa" value="">
  <input type="email" name="email_empresa" value="">
  <select class="" name="rubro_empresa">
    <option selected disabled>Rubro</option>
    @foreach ($rubros as $rubro)
      <option value="{{$rubro->id_rubro}}">{{$rubro->nombre_rubro}}</option>
    @endforeach
  </select>
  <textarea name="descripcion_solicitud" rows="8" cols="80"></textarea>
  <input type="submit" name="" value="Enviar">
</form>

<script src="{{asset('js/jquery-2.2.3.min.js')}}" charset="utf-8"></script>

<script type="text/javascript">
$(document).ready(function() {
  $(document).on('submit', '#form_ingresar', function(event){
    event.preventDefault();

    var url = $(this).attr('action');
    var token = $('input[name=_token]').val();
    var datos = $(this).serialize();

    $.ajax({
      url: url,
      headers: {'X-CSRF-TOKEN' : token},
      type: 'POST',
      data: datos
    })
    .done(function(resp) {
      console.log("success");
      alert(resp);
    })
    .fail(function(data) {
      console.log("error");
      console.log(data.responseText);
    })
    .always(function() {
      console.log("complete");
    });
  });
});

</script>
