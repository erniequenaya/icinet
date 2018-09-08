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
                    <h5 class="text-center mb-4">Modificiar encuesta</h5>
                    <h5 class="text-center">"Nombre"</h5>
                    <form action="{{route('administracion')}}" method="get">
                      <fieldset class="form-group">
                        <label for="rut_empresa">Fecha inicio</label>
                        <input name="fecha_inicio_encuesta" type="date" class="form-control" placeholder="">
                      </fieldset>
                      <fieldset class="form-group">
                        <label for="rut_empresa">Fecha termino</label>
                        <input name="fecha_termino_encuesta" type="date" class="form-control" placeholder="">
                      </fieldset>
                          <button type="submit" class="btn btn-primary submit mb-4 mx-auto d-block">Completar</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<!--//Login-->
