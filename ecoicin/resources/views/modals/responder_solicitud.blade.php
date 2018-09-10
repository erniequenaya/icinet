<!--/Login-->
<div class="modal fade" id="responder_solicitud" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="login px-4 mx-auto mw-100">
                  <h5 class="text-center mb-4">Responder solicitud</h5>
                  <h5 class="text-center" name="nombre_empresa">"Nombre"</h5>
                  <form action="{{route('empresas.responder')}}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="id_solicitud" value="" required>
                    <fieldset class="form-group">
                      <label for="tipo_proyecto"><b>Estado</b></label>
                        <select class="form-control" name="tipo_estado" required>
                          @foreach ($tipo_estado as $estado)
                            <option value="{{$estado->id_tipo_estado}}">{{$estado->nombre_tipo_estado}}</option>
                          @endforeach
                        </select>
                    </fieldset>

                    <fieldset class="form-group">
                      <label for="tipo_proyecto"><b>Razon</b></label>
                      <textarea class="form-control" name="razon_estado" rows="3" required></textarea>
                    </fieldset>
                        <button type="submit" class="btn btn-primary submit mb-4 mx-auto d-block">Completar</button>
                  </form>
                </div>
            </div>

        </div>
    </div>
</div>
<!--//Login-->
