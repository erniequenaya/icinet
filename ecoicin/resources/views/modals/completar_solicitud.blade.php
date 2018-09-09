<!--/Login-->
<div class="modal fade" id="completar_solicitud" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="login px-4 mx-auto mw-100">
                    <h5 class="text-center mb-4">Completar solicitud</h5>
                    <h5 class="text-center" name="nombre_empresa">"Nombre"</h5>
                    <form action="{{route('empresas.completar')}}" method="post">
                      {{ csrf_field() }}
                      <input type="hidden" name="id_solicitud" value="">
                      <fieldset class="form-group">
                        <label for="tipo_proyecto"><b>Area Informatica</b></label>
                          <select class="form-control" name="tipo_area">
                            @foreach ($tipo_area_informatica as $tipo)
                              <option value="{{$tipo->id_tipo_area_informatica}}">{{$tipo->nombre_tipo_area_informatica}}</option>
                            @endforeach

                          </select>
                      </fieldset>

                      <fieldset class="form-group">
                        <label for="tipo_proyecto"><b>Tipo solicitud</b></label>
                          <select class="form-control" name="tipo_proyecto">
                            @foreach ($tipo_proyecto as $tipo)
                              <option value="{{$tipo->id_tipo_proyecto}}">{{$tipo->nombre_tipo_proyecto}}</option>
                            @endforeach
                          </select>
                      </fieldset>
                          <button type="submit" class="btn btn-primary mb-4 mx-auto d-block">Completar</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<!--//Login-->
