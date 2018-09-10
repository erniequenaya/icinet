<!--/Login-->
<div class="modal fade" id="modificar_encuesta" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="login px-4 mx-auto mw-100">
                    <h5 class="text-center mb-4">Modificar encuesta</h5>
                    <h5 class="text-center" name="nombre_encuesta">"Nombre"</h5>
                    <form action="{{route('encuestas.modificar')}}" method="post">
                      {{ csrf_field() }}
                      <input type="hidden" name="id_encuesta" value="" required>
                      <fieldset class="form-group">
                        <label for="nombre_encuesta">Nombre</label>
                        <input name="nombre_encuesta" type="text" class="form-control" placeholder="" required>
                      </fieldset>
                      <fieldset class="form-group">
                        <label for="url_encuesta">URL</label>
                        <input name="url_encuesta" type="text" class="form-control" placeholder="" required>
                      </fieldset>
                      <fieldset class="form-group">
                        <label for="fecha_inicio_encuesta">Fecha de inicio</label>
                        <input name="fecha_inicio_encuesta" type="date" class="form-control" placeholder="" required>
                      </fieldset>
                      <fieldset class="form-group">
                        <label for="fecha_termino_encuesta">Fecha de termino</label>
                        <input name="fecha_termino_encuesta" type="date" class="form-control" placeholder="" required>
                      </fieldset>
                      <fieldset class="form-check">
                        <input name='solo_alumnos' class="form-check-input" type="checkbox" value="1">
                        <label class="form-check-label" for="defaultCheck1">Solo para alumnos</label>
                      </fieldset>
                      <fieldset class="form-check">
                        <input name='visible' class="form-check-input" type="checkbox" value="1">
                        <label class="form-check-label" for="defaultCheck1">Visible</label>
                      </fieldset>

                      <button type="submit" class="btn btn-primary mx-auto d-block">Modificar</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<!--//Login-->
