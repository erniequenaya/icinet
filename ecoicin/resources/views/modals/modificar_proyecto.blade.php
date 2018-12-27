<!--/Login-->
<div class="modal fade" id="modificar_proyecto" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="login px-4 mx-auto mw-100">
                    <h5 class="text-center mb-4">Modificar proyecto</h5>
                    <h5 class="text-center" name="nombre_proyecto">"Nombre"</h5>
                    <form enctype="multipart/form-data" action="{{route('repositorio.update')}}" method="post">
                      {{ csrf_field() }}
                      <input type="hidden" name="id_proyecto" value="">
                      <fieldset class="form-group">
                        <label class="mb-2">Nombre proyecto: </label>
                        <input name="nombre_proyecto" type="text" class="form-control" placeholder="" required>
                      </fieldset>

                      <fieldset class="form-group">
                        <label class="mb-2">Autores: </label>
                        <input name="autores_proyecto" type="text" class="form-control" placeholder="" required>
                      </fieldset>

                      <fieldset class="form-group">
                        <label>Tipo Proyecto</label>
                          <select class="form-control" name="tipo_proyecto" required>
                            @foreach ($tipo_proyecto as $tipo)
                              <option value="{{$tipo->id_tipo_proyecto}}">{{$tipo->nombre_tipo_proyecto}}</option>
                            @endforeach
                          </select>
                      </fieldset>

                      <fieldset class="form-group">
                        <label class="mb-2">Año: </label>
                        <input name="fecha_proyecto" type="date" class="form-control" placeholder="" required>
                      </fieldset>

                      <fieldset class="form-group">
                        <label class="mb-2">URL: </label>
                        <input name="url_proyecto" type="text" class="form-control" placeholder="https://icin.uta.cl/" required>
                      </fieldset>

                      <fieldset class="form-group">
                        <label >Informe</label>
                        <input type="file" name="informe_proyecto" class="form-control-file">
                      </fieldset>

                      <fieldset class="form-group">
                        <label >Presentacion</label>
                        <input type="file" name="presentacion_proyecto" class="form-control-file">
                      </fieldset>

                      <button type="submit" class="btn btn-primary submit mb-4 mx-auto d-block">Modificar</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<!--//Login-->
