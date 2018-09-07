<!--/Login-->
<div class="modal fade" id="modificar_area_informatica" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="login px-4 mx-auto mw-100">
                    <h5 class="text-center mb-4">Modificiar Area Informatica</h5>
                    <h5 class="text-center">"Nombre"</h5>
                    <form action="{{route('administracion')}}" method="get">
                      <fieldset class="form-group">
                        <label class="mb-2">Nombre area: </label>
                        <input name="nombre_area" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="">
                      </fieldset>
                          <button type="submit" class="btn btn-primary submit mb-4 mx-auto d-block">Completar</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<!--//Login-->
