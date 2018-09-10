<!--/Login-->
<div class="modal fade" id="añadir_proyecto" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="login px-4 mx-auto mw-100">
                    <h5 class="text-center mb-4">Añadir proyecto</h5>
                    <form id="form_ingresar_proyecto" enctype="multipart/form-data" action="{{route('repositorio.store')}}" method="post">
                      {{ csrf_field() }}
                      <fieldset class="form-group">
                        <label class="mb-2">Nombre proyecto: </label>
                        <input name="nombre_proyecto" type="text" class="form-control" placeholder="" required="">
                      </fieldset>

                      <fieldset class="form-group">
                        <label class="mb-2">Autores: </label>
                        <input name="autores_proyecto" type="text" class="form-control" placeholder="" required="">
                      </fieldset>

                      <fieldset class="form-group">
                        <label for="tipo_proyecto">Tipo Proyecto</label>
                          <select class="form-control" name="tipo_proyecto">
                            @foreach ($tipo_proyecto as $tipo)
                              <option value="{{$tipo->id_tipo_proyecto}}">{{$tipo->nombre_tipo_proyecto}}</option>
                            @endforeach
                          </select>
                      </fieldset>

                      <fieldset class="form-group">
                        <label class="mb-2">Año: </label>
                        <input name="fecha_proyecto" type="date" class="form-control" placeholder="" required="">
                      </fieldset>

                      <fieldset class="form-group">
                        <label for="exampleFormControlFile1">Informe</label>
                        <input type="file" name="informe_proyecto" class="form-control-file">
                      </fieldset>

                      <fieldset class="form-group">
                        <label for="exampleFormControlFile1">Presentacion</label>
                        <input type="file" name="presentacion_proyecto" class="form-control-file">
                      </fieldset>

                      <button type="submit" class="btn btn-primary submit mb-4 mx-auto d-block">Completar</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<!--//Login-->
