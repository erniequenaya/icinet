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
                    <h5 class="text-center">"Nombre"</h5>
                    <form action="{{route('empresas')}}" method="get">
                      <fieldset class="form-group">
                        <label for="tipo_proyecto"><b>Area Informatica</b></label>
                          <select class="form-control" id="tipo_proyecto">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                      </fieldset>

                      <fieldset class="form-group">
                        <label for="tipo_proyecto"><b>Tipo solicitud</b></label>
                          <select class="form-control" id="tipo_proyecto">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                      </fieldset>
                          <button type="submit" class="btn btn-primary submit mb-4 mx-auto d-block">Completar</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<!--//Login-->
